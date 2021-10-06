<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use common\components\Task;

class TaskForm extends Model
{
    public $code;
    public $taskUrl;

    public $output;
    public $formattedOutput;
    public $status;

    public function rules()
    {
        return [
            [['code'], 'required', 'message' => 'Напишите код'],
            [['code'], 'checkResult'],
            [['code'], 'checkErrors'],
            [['code'], 'compareData'],
            [['formattedOutput'], 'safe'],
        ];
    }

    public function checkResult()
    {
        $result = Yii::$app->task->getTaskResult($this->code);
        if (
            empty($result)
            || empty($result["output"])
            || empty($result["status"])
            || ($result["status"] == Task::STATUS_ERROR)
        ) {
            $this->addError('code', Task::ERROR_TEXT);
        } else {
            $this->formattedOutput = $result['formattedOutput'];
            $this->output = $result['output'];
            $this->status = $result['status'];
        }
    }

    public function checkErrors()
    {
        if ($this->status == Task::STATUS_ERROR) {
            $this->addError('code', $this->output);
        }
    }

    public function compareData()
    {
        $data = include(Yii::$app->task->getTaskVaildatorFilePath($this->taskUrl));
        if (!empty($data)) {
            if ($this->output != $data) {
                $this->addError('code', Task::ERROR_TEXT);
            }
        }
    }

    public function attributeLabels()
    {
        return [
            'code' => '<?php',
        ];
    }
}
