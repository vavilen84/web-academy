<?php
namespace common\models;

use Yii;
use yii\db\ActiveRecord;


/**
 * User model
 *
 * @property integer $user_id
 * @property integer $task_id
 */
class UserPassedTask extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%user_passed_task}}';
    }


    public function rules()
    {
        return [
            ['user_id', 'integer'],
            ['task_id', 'integer'],
        ];
    }


}
