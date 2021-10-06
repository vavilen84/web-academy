<?php

use yii\db\Migration;

class m170604_230650_create_image_gallery_tables extends Migration
{
    public function up()
    {
        $this->createTable('image', [
            'PRIMARY KEY (`id`)',
            'id' => 'int(11) NOT NULL AUTO_INCREMENT',
            'order' => 'int(11) NULL',
            'gallery_id' => 'int(11) NULL',
            'image_original' => 'varchar(255) NULL',
            'image_crop' => 'varchar(255) NULL',
            'image_preview' => 'varchar(255) NULL',
        ], 'ENGINE=InnoDB DEFAULT CHARSET=utf8');

        $this->createTable('gallery', [
            'PRIMARY KEY (`id`)',
            'id' => 'int(11) NOT NULL AUTO_INCREMENT',
            'order' => 'int(11) NULL',
            'status' => 'int(11) NULL',
            'title' => 'varchar(255) NULL',
            'image_original' => 'varchar(255) NULL',
            'image_crop' => 'varchar(255) NULL',
            'image_preview' => 'varchar(255) NULL',
        ], 'ENGINE=InnoDB DEFAULT CHARSET=utf8');
    }

    public function down()
    {
        echo "m170604_230650_create_image_gallery_tables cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
