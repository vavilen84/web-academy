<?php
namespace frontend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use frontend\models\TaskForm;
use yii\helpers\Url;
use yii\helpers\Json;
use common\components\Task;

class TaskController extends BaseController
{
    public function actionIndex($url = null)
    {
        $model = new TaskForm();
        if (!$url) {
            $url = Yii::$app->task->getFirstTaskUrl();
            $this->redirect(Url::toRoute(['task/index', 'url' => $url]));
        }
        $task = Yii::$app->task->getTaskByUrl($url);
        if (!$task) {
            throw new NotFoundHttpException('Task not found');
        }
        $this->prevNextButtons = Yii::$app->task->getPrevNextTasksMenuItems($task);
        $model->taskUrl = $url;
        if (Yii::$app->request->post()) {
            $errors = null;
            if ($model->load(Yii::$app->request->post()) && $model->validate()) {
                if (Yii::$app->user->id) {
                    Yii::$app->task->createPassedTask(Yii::$app->user->id, $task['id']);
                }
            } else {
                $errors = $model->getErrors();
            }
            $output = $model->formattedOutput;
            $successMessage = '';
            if (!$errors) {
                $successMessage = Yii::$app->task->getSuccessMessage($task, $this);
            }
            echo Json::encode([
                'status' => $errors ? 'error' : 'success',
                'message' => $errors ? current($errors)[0] : Task::SUCCESS_TEXT,
                'output' => $output,
                'successMessage' => $successMessage
            ]);
            Yii::$app->end();
        }

        $this->description = $task['description'];

        return $this->render('index', [
            'model' => $model,
            'task' => $task
        ]);
    }

    public function actionList()
    {
        $levels = Yii::$app->task->getCheckedTasks();
        return $this->render('list', compact('levels'));
    }
}
