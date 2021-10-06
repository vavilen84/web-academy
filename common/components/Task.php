<?php
namespace common\components;

use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;
use common\models\UserPassedTask;

class Task extends Component
{
    const STATUS_SUCCESS = 1;
    const STATUS_ERROR = 2;

    const ERROR_TEXT = 'Ошибка!';
    const SUCCESS_TEXT = 'Отлично!';

    const TASK_FILE_NAME = 'task.php';
    const TASK_VALIDATOR_FILE_NAME = 'validator.php';
    const TASK_SUCCESS_FILE_NAME = 'success.php';

    public $levels = [];
    public $tasks = [];

    public function init()
    {
        parent::init();
        $this->levels = include('data/tasks.php');
        if ($this->levels) {
            foreach ($this->levels as $level) {
                $this->tasks += $level['items'];
            }
        }
    }

    public function getFirstTaskUrl()
    {
        $firstItem = current($this->tasks);
        return $firstItem['url'];
    }

    public function getTaskByUrl($url)
    {
        foreach ($this->tasks as $task) {
            if ($task['url'] == $url) {
                return $task;
            }
        }

        return null;
    }

    public function getTaskResult($code)
    {
        $code = str_replace('\'', '"', $code);
        $output = null;
        exec('docker run -v /docker:/var/www/web-academy/docker --rm ' . Yii::$app->params['docker_image']
             . ' php -r \'' . $code . '\' 2>&1', $output);
        $result = [
            'output' => '',
            'formattedOutput' => '',
            'status' => self::STATUS_ERROR
        ];
        if (!empty($output)) {
            if (!in_array(['error', 'notice'], $output)) {
                return [
                    'output' => $output,
                    'formattedOutput' => implode('<br>', $output),
                    'status' => self::STATUS_SUCCESS
                ];
            }
        }

        return $result;
    }

    public function getPrevTaskUrl($task)
    {
        return !empty($this->tasks[$task['prev']]) ? $this->tasks[$task['prev']]['url'] : $this->getFirstTaskUrl();
    }

    public function getNextTaskUrl($task)
    {
        return !empty($this->tasks[$task['next']]) ? $this->tasks[$task['next']]['url'] : $this->getFirstTaskUrl();
    }

    public function getPrevNextTasksMenuItems($task)
    {
        $items = [];
        if ($task['prev']) {
            $prev = [
                'label' => 'Предыдущий урок',
                'url' => ['task/index', 'url' => $this->getPrevTaskUrl($task)],
                'options' => ['class' => 'prev']
            ];
            array_push($items, $prev);
        }
        if ($task['next']) {
            $next = [
                'label' => 'Следующий урок',
                'url' => ['task/index', 'url' => $this->getNextTaskUrl($task)],
                'options' => ['class' => 'next']
            ];
            array_push($items, $next);
        }

        return $items;
    }

    public function createPassedTask($userId, $taskId)
    {
        $userId = (int)$userId;
        $taskId = (int)$taskId;
        $model = new UserPassedTask();
        $passedTask = $model::find()->where(['user_id' => $userId, 'task_id' => $taskId])->one();
        if (!$passedTask) {
            $model->user_id = (int)$userId;
            $model->task_id = (int)$taskId;
            $model->save();
        }
    }

    public function getUserPassedTasksIds()
    {
        $result = [];
        if (!Yii::$app->user->isGuest) {
            $model = new UserPassedTask();
            $records = $model::find()->where(['user_id' => Yii::$app->user->id])->all();
            if ($records) {
                foreach ($records as $k => $v) {
                    $result[] = $v->task_id;
                }
            }
        }

        return $result;
    }

    public function getCheckedTasks()
    {
        $tasks = $this->levels;
        $userPassedTasks = Yii::$app->task->getUserPassedTasksIds();
        foreach ($tasks as $levelKey => $level) {
            foreach ($level['items'] as $itemKey => $item) {
                $tasks[$levelKey]['items'][$itemKey]['checked'] = in_array($item['id'], $userPassedTasks) ? true : false;
            }

        }

        return $tasks;
    }

    public function getTaskFilePath($url)
    {
        return Yii::$app->params['taskPath'] . $url . DIRECTORY_SEPARATOR . self::TASK_FILE_NAME;
    }

    public function getTaskVaildatorFilePath($url)
    {
        return Yii::$app->params['taskPath'] . $url . DIRECTORY_SEPARATOR . self::TASK_VALIDATOR_FILE_NAME;
    }

    public function getTaskSuccessFilePath($url)
    {
        return Yii::$app->params['taskPath'] . $url . DIRECTORY_SEPARATOR . self::TASK_SUCCESS_FILE_NAME;
    }

    public function getSuccessMessage($task, $controller)
    {
        if(@file_exists($this->getTaskSuccessFilePath($task['url']))){
            return $controller->renderFile($this->getTaskSuccessFilePath($task['url']));
        }

        return '';
    }
}