<div class="gallery-item" id="item_<?php echo $data->id; ?>">
	<img src="<?php echo ImageComponent::IMAGE_PREVIEW_PATH.$data->image_preview; ?>">
	<a class="icon icon-pencil" href="<?php echo Yii::app()->createUrl('admin/image/update',['id'=>$data->id]); ?>"></a>
	<a class="icon icon-remove" href="<?php echo Yii::app()->createUrl('admin/image/delete',['id'=>$data->id]); ?>"></a>
</div>
