<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use common\widgets\Alert;
use yii\helpers\Url;

$this->title = $task['title'];
$this->params['breadcrumbs'][] = $this->title;
?>
<?php $form = ActiveForm::begin(
    [
        'id' => 'contact-form',
        'options' => [
            'class' => 'contact-form'
        ],
        'fieldConfig' => [
            'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{endWrapper}"
        ]
    ]
); ?>
<div class="site-contact">
    <div class="mb15 mobile-prev-next-btns">
        <?php foreach($this->context->prevNextButtons as $button): ?>
            <?php echo Html::a($button['label'], $button['url'], ['class' => 'btn btn-primary']); ?>
        <?php endforeach; ?>
    </div>
    <div class="well">
        <?php echo $this->renderFile(Yii::$app->task->getTaskFilePath($task['url'])); ?>
    </div>
    <div class="well result-block">
        <div class="result-title">
            Результат:
            <span class="result-message"></span>
        </div>
        <div class="result-output"></div>
    </div>
    <div class="clear"></div>
    <div class="row code-area">
        <div class="loader"></div>
        <div id="highlighted-code"></div>
        <?php echo $form->field($model, 'code')->textarea(['class' => 'code-textarea']); ?>
        <div class="form-group">
            <?php echo Html::submitButton('Отправить', ['class' => 'btn btn-primary code-form-btn',]); ?>
        </div>
    </div>
</div>
<?php ActiveForm::end(); ?>
