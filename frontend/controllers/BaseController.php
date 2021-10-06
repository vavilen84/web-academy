<?php
namespace frontend\controllers;

use frontend\models\CodeForm;
use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use frontend\models\PasswordResetRequestForm;
use frontend\models\ResetPasswordForm;
use frontend\models\SignupForm;
use frontend\models\ContactForm;


class BaseController extends Controller
{
    public $bottomMenuItems;
    public $prevNextButtons;
    public $description = 'интерактивные уроки PHP';

    public function beforeAction($action)
    {
        $this->setData();
        return parent::beforeAction($action);
    }

    protected function setData()
    {
        $this->bottomMenuItems = Yii::$app->base->getBottomMenuItems();
    }
}