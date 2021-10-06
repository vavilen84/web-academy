<?php
use yii\helpers\Url;
use common\components\Gallery;

?>
<div class="gallery-item" id="item_<?php echo $data->id; ?>">
    <img src="<?php echo Gallery::GALLERY_IMAGE_PREVIEW_PATH . $data->image_preview; ?>">
    <span class="label"><?php echo $data->title; ?></span>
    <a class="icon icon-pencil" href="<?php echo Url::to(['/gallery/update', 'id' => $data->id]); ?>"></a>
    <a class="icon icon-remove" href="<?php echo Url::to(['/gallery/delete', 'id' => $data->id]); ?>"></a>
    <a class="icon icon-camera" href="<?php echo Url::to(['/image/index', 'id' => $data->id]); ?>"></a>
</div>
