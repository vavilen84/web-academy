<?php
namespace common\components;

use Yii;
use yii\base\Component;
use yii\base\InvalidConfigException;

class Gallery extends Component
{
    const GALLERY_IMAGE_ORIGINAL_PATH = '/upload/gallery_image_original/';
    const GALLERY_IMAGE_CROP_PATH = '/upload/gallery_image_crop/';
    const GALLERY_IMAGE_PREVIEW_PATH = '/upload/gallery_image_preview/';
    const GALLERY_ENTITY_TYPE = 1;

    public function getGalleriesList()
    {
        $result = array();
        $collection = Gallery::model()->findAll();
        if ($collection) {
            foreach ($collection as $gallery) {
                $result[$gallery->id] = $gallery->title;
            }
        }

        return $result;
    }

    public function getActiveGalleries()
    {
        return Gallery::model()->findAll('status=1');
    }

    public function getNavData()
    {
        $result = [];
        $galleries = $this->getActiveGalleries();
        if ($galleries) {
            foreach ($galleries as $gallery) {
                $result[] = [
                    'label' => $gallery['title'],
                    'url' => Yii::app()->createUrl('/frontend/frontend/gallery', ['id' => $gallery['id']])
                ];
            }
        }

        return $result;
    }
}