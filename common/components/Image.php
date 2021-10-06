<?php
namespace common\components;

use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;

class Image extends Component
{
    const IMAGE_ORIGINAL_PATH = '/upload/image_original/';
    const IMAGE_CROP_PATH = '/upload/image_crop/';
    const IMAGE_PREVIEW_PATH = '/upload/image_preview/';
    const IMAGE_ENTITY_TYPE = 2;

    //??
    public function getImagesList()
    {
        $result = array();
        $collection = Image::model()->findAll();
        if ($collection) {
            foreach ($collection as $gallery) {
                $result[$gallery->id] = $gallery->title_ru;
            }
        }

        return $result;
    }
}