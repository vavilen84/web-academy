<?php
/* @var $this GalleryController */
/* @var $model Gallery */
/* @var $form CActiveForm */
?>

<div class="form">
	<div class="fleft w25per">

		<div class="row">
			<?php $form=$this->beginWidget('CActiveForm', [
				'id'=>'fileupload',
				'action'=>Yii::app()->createUrl('site/imageupload',['typeId'=>GalleryComponent::GALLERY_ENTITY_TYPE]),
				'htmlOptions'=>array('enctype'=>'multipart/form-data')
			]); ?>
				<span class="btn btn-success fileinput-button">
					<?php $label = $model->isNewRecord ? 'Загрузить фото' : 'Изменить фото'; ?>
					<span><?php echo $label; ?></span>
					<input type="file" name="userfile" multiple>
				</span>
			<?php $this->endWidget(); ?>
		</div>

		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'gallery-form',
			'htmlOptions'=>array('enctype'=>'multipart/form-data'),
			'enableAjaxValidation'=>true,
			'enableClientValidation'=>true,
			'clientOptions'=>array(
				'validateOnChange'=>true,
				'validateOnSubmit'=>true
			)
		)); ?>
		<?php echo $form->errorSummary($model); ?>
		<div class="row">
			<?php echo $form->labelEx($model,'status'); ?>
			<?php echo $form->dropDownList($model,'status',[1=>'Active',0=>'Inactive']); ?>
			<?php echo $form->error($model,'status'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'title_ru'); ?>
			<?php echo $form->textField($model,'title_ru',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'title_ru'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'title_en'); ?>
			<?php echo $form->textField($model,'title_en',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'title_en'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'description_ru'); ?>
			<?php echo $form->textArea($model,'description_ru',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'description_ru'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'description_en'); ?>
			<?php echo $form->textArea($model,'description_en',array('rows'=>6, 'cols'=>50)); ?>
			<?php echo $form->error($model,'description_en'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'meta_keywords_ru'); ?>
			<?php echo $form->textField($model,'meta_keywords_ru',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'meta_keywords_ru'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'meta_keywords_en'); ?>
			<?php echo $form->textField($model,'meta_keywords_en',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'meta_keywords_en'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'meta_description_ru'); ?>
			<?php echo $form->textField($model,'meta_description_ru',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'meta_description_ru'); ?>
		</div>

		<div class="row">
			<?php echo $form->labelEx($model,'meta_description_en'); ?>
			<?php echo $form->textField($model,'meta_description_en',array('size'=>60,'maxlength'=>255)); ?>
			<?php echo $form->error($model,'meta_description_en'); ?>
		</div>

		<div class="row buttons">
			<?php echo CHtml::submitButton('Сохранить',['id'=>'submit-btn']); ?>
		</div>
		<?php echo $form->hiddenField($model,'image_original',['class'=>'image_original']); ?>
		<?php echo $form->hiddenField($model,'image_crop',['class'=>'image_crop']); ?>
		<?php echo $form->hiddenField($model,'image_preview',['class'=>'image_preview']); ?>
		<?php $this->endWidget(); ?>
	</div>

	<div class="fright w70per">
		<div id="original-image">
			<?php if($model->image_original): ?>
				<img src="<?php echo GalleryComponent::GALLERY_IMAGE_ORIGINAL_PATH.$model->image_original; ?>"
					 alt="" class="entity-original-image" data-filename="<?php echo $model->image_original; ?>">
			<?php endif;?>
		</div>
		<div id="preview-image">
			<?php if($model->image_preview): ?>
				<img src="<?php echo GalleryComponent::GALLERY_IMAGE_PREVIEW_PATH.$model->image_preview; ?>"
					 alt="" class="entity-preview-image">
			<?php endif;?>
		</div>
		<div id="error"></div>

		<?php echo CHtml::submitButton('Crop',['id'=>'crop','class'=>'btn btn-success fileinput-button']); ?>

		<?php echo CHtml::hiddenField('left'); ?>
		<?php echo CHtml::hiddenField('top'); ?>
		<?php echo CHtml::hiddenField('width'); ?>
		<?php echo CHtml::hiddenField('height'); ?>

		<?php echo CHtml::hiddenField('type-id',GalleryComponent::GALLERY_ENTITY_TYPE);?>

	</div>
	<div class="clear"></div>

</div>