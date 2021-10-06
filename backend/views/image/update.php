<a class="btn" href="<?php echo Yii::app()->createUrl('admin/image/index',array('id'=>$model->gallery_id)); ?>">← Обратно</a>
<h1>Редактировать снимок #<?php echo $model->id; ?></h1>
<?php $this->renderPartial('_form', array('model'=>$model));