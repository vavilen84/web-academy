<?php

use yii\db\Migration;

class m170404_225246_user_passed_task_initial extends Migration
{
    public function up()
    {
        $this->createTable('user_passed_task', [
            'user_id' => 'int(11) unsigned NOT NULL',
            'task_id' => 'int(11) unsigned NOT NULL',
            'PRIMARY KEY (`user_id`,`task_id`)'
        ], 'ENGINE=InnoDB DEFAULT CHARSET=utf8');
    }

    public function down()
    {
        echo "m170404_225246_user_passed_task_initial cannot be reverted.\n";

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
