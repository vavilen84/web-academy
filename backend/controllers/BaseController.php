<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;


class BaseController extends Controller
{

    public function beforeAction($action)
    {
        return parent::beforeAction($action);
    }
}