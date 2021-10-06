<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "gallery".
 *
 * @property integer $id
 * @property integer $order
 * @property integer $status
 * @property string $title
 * @property string $image_original
 * @property string $image_crop
 * @property string $image_preview
 */
class Gallery extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'gallery';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order', 'status'], 'integer'],
            [['title', 'image_original', 'image_crop', 'image_preview'], 'string', 'max' => 255],
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
            'status' => 'Status',
            'title' => 'Title',
            'image_original' => 'Image Original',
            'image_crop' => 'Image Crop',
            'image_preview' => 'Image Preview',
        ];
    }
}
