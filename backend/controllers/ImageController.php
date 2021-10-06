<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use common\models\Gallery;
use common\models\Image;

class ImageController extends BaseController
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => [],
                        'allow' => true,
                        'roles' => ['?'],
                    ],
                    [
                        'actions' => [],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ]
        ];
    }

    public function actionIndex($id)
    {
//        $dataProvider = new ActiveDataProvider('Image', [
//            'criteria' => [
//                'condition' => 'gallery_id =:id',
//                'params' => [':id' => $id],
//            ],
//            'pagination' => [
//                'pageSize' => 9999,
//            ],
//            'sort' => [
//                'defaultOrder' => '`order`',
//            ]
//        ]);
        $dataProvider = new ActiveDataProvider(
            [
                'query' => Image::find(),
                'pagination' => [
                    'pageSize' => 20,
                ],
            ]
        );
        $this->render('index', [
            'dataProvider' => $dataProvider,
//            'gallery' => Gallery::model()->findByPk($id)
        ]);
    }

    public function actionTest()
    {
        $this->render('test');
    }


    public function actionCreate()
    {
        $model = new Image;
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
        if (isset($_POST['Image'])) {
            $model->attributes = $_POST['Image'];
            $model->order = isset($model->id) ? $model->order : $this->getOrderNumberForNewRecord();
            if ($model->validate()) {
                if ($model->save()) {
                    $this->clearSession();
                }
                $this->redirect(['update', 'id' => $model->id]);
            }
        } else {
            $model->image_original = $model->image_original ? $model->image_original : Yii::app()->session['image_original'];
            $model->image_crop = $model->image_crop ? $model->image_crop : Yii::app()->session['image_crop'];
            $model->image_preview = $model->image_preview ? $model->image_preview : Yii::app()->session['image_preview'];
        }

        return $model;
    }

    protected function getOrderNumberForNewRecord()
    {
        $criteria = new CDbCriteria();
        $criteria->select = 'max(`order`) AS `order`';
        $model = Image::model()->find($criteria);

        return $model ? $model->order + 1 : 0;
    }

    public function actionDelete($id)
    {
        $model = $this->loadModel($id);
        $model->delete();
        if (!isset($_GET['ajax'])) {
            $this->redirect(Yii::app()->createUrl('admin/image/index', ['id' => $model->gallery_id]));
        }
    }

    public function loadModel($id)
    {
        $model = Image::model()->findByPk($id);
        if ($model === null) {
            throw new CHttpException(404, 'The requested page does not exist.');
        }
        return $model;
    }

    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'image-form') {
            $model->attributes = $_POST['ajax'];
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
}