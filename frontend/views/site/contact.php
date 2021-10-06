<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Обратная связь';
$this->params['breadcrumbs'][] = $this->title;
?>
<script>
    $(document).ready(function(){
        $('#contact-form').append('<input type="hidden" value="1" name="ContactForm[hidden]">');
    });
</script>
<div class="site-contact">
    <?php if (Yii::$app->session->hasFlash('success')): ?>
        <span class="success email-success">
            <?php echo Yii::$app->session->getFlash('success'); ?>
        </span>
    <?php endif; ?>
    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                <?php echo $form->field($model, 'name')->textInput(['autofocus' => true]) ?>
                <?php echo $form->field($model, 'email') ?>
                <?php echo $form->field($model, 'subject') ?>
                <?php echo $form->field($model, 'body')->textarea(['rows' => 6]) ?>
                <div class="form-group">
                    <?php echo Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>
            <?php ActiveForm::end(); ?>
        </div>
    </div>

</div>
