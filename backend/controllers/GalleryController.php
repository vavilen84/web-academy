<?php
namespace backend\controllers;

use Yii;
use yii\base\InvalidParamException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use common\models\Gallery;


class GalleryController extends BaseController
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index'],
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => ['index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ]
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider(
            [
                'query' => Gallery::find(),
                'pagination' => [
                    'pageSize' => 20,
                ],
            ]
        );
        $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionTest()
    {
        $this->render('test');
    }


    public function actionCreate()
    {
        $model = new Gallery;
        $model = $this->manageModel($model);
        $this->render('create', compact('model'));
    }

    public function actionUpdate($id)
    {
        $model = $this->loadModel($id);
        $model = $this->manageModel($model);
        $this->render('update', compact('model'));
    }

    protected function manageModel($model)
    {
        $this->performAjaxValidation($model);
        if (isset($_POST['Gallery'])) {
            $model->attributes = $_POST['Gallery'];
            $model->order = isset($model->id) ? $model->order : $this->getOrderNumberForNewRecord();
            if ($model->validate()) {
                if ($model->save()) {
                    $this->clearSession();
                }
                $this->redirect(['update', 'id' => $model->id]);
            }
        } else {
            $model->image_original = $model->image_original ? $model->image_original : Yii::app()->session['gallery_image_original'];
            $model->image_crop = $model->image_crop ? $model->image_crop : Yii::app()->session['gallery_image_crop'];
            $model->image_preview = $model->image_preview ? $model->image_preview : Yii::app()->session['gallery_image_preview'];
        }

        return $model;
    }

    protected function getOrderNumberForNewRecord()
    {
        $criteria = new CDbCriteria();
        $criteria->select = 'max(`order`) AS `order`';
        $model = Gallery::model()->find($criteria);

        return $model ? $model->order + 1 : 0;
    }

    public function actionDelete($id)
    {
        $this->loadModel($id)->delete();
        if (!isset($_GET['ajax'])) {
            $this->redirect(Yii::app()->createUrl('admin/gallery/index'));
        }
    }

    public function loadModel($id)
    {
        $model = Gallery::model()->findByPk($id);
        if ($model === null) {
            throw new CHttpException(404, 'The requested page does not exist.');
        }
        return $model;
    }

    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'gallery-form') {
            $model->attributes = $_POST['ajax'];
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}