<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "image".
 *
 * @property integer $id
 * @property integer $order
 * @property integer $gallery_id
 * @property string $image_original
 * @property string $image_crop
 * @property string $image_preview
 */
class Image extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'image';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order', 'gallery_id'], 'integer'],
            [['image_original', 'image_crop', 'image_preview'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'order' => 'Order',
            'gallery_id' => 'Gallery ID',
            'image_original' => 'Image Original',
            'image_crop' => 'Image Crop',
            'image_preview' => 'Image Preview',
        ];
    }
}
