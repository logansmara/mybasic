<?php
namespace app\modules\anver\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use app\modules\anver\models\AnverForm;

class DeleteAuthorController extends \yii\web\Controller
{
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
    	$model = new AnverForm();
        return $this->render('index', compact('model'));
    }

    public function actionBigSmallTable()
    {
        $model = new AnverForm();
        if($model->load(Yii::$app->request->post()) && $model->validate()) {
$small = $model->small;
$small = $big = str_replace('_','-',$small);
$small = $big = str_replace('.','-',$small);
$model->small = $small;
$big = $model->small;
$big = str_replace('-',' ',$big);
$big = ucwords($big);
$big = str_replace(' ','',$big);
$model->big = $big;
$table = $model->small;
$model->table = str_replace('-','_',$table);
        }
        return $this->render('big-small-table', compact('model'));
    }

    public function actionControler()
    { 
    	$model = new AnverForm();
        if($model->load(Yii::$app->request->post()) && $model->validate()) {
            $big = $model->big;
            $small = $model->small;
            $table = $model->table;
        }
        return $this->render('controler', compact('model','big','small','table'));
    }

    public function actionVievv()
    { 
    	$model = new AnverForm();
        if($model->load(Yii::$app->request->post()) && $model->validate()) {
            $big = $model->big;
            $small = $model->small;
            $table = $model->table;
        }
        return $this->render('vievv', compact('model','big','small','table'));
    }

    public function actionModel()
    { 
    	$model = new AnverForm();
        if($model->load(Yii::$app->request->post()) && $model->validate()) {
            $big = $model->big;
            $small = $model->small;
            $table = $model->table;
        }
        return $this->render('model', compact('model','big','small','table'));
    }

    public function actionAdminControler()
    { 
    	$model = new AnverForm();
        if($model->load(Yii::$app->request->post()) && $model->validate()) {
            $big = $model->big;
            $small = $model->small;
            $table = $model->table;
        }
        return $this->render('admin-controler', compact('model','big','small','table'));
    }

    public function actionAdminVievv()
    { 
    	$model = new AnverForm();
        if($model->load(Yii::$app->request->post()) && $model->validate()) {
            $big = $model->big;
            $small = $model->small;
            $table = $model->table;
        }
        return $this->render('admin-vievv', compact('model','big','small','table'));
    }

    public function actionAdminImageModel()
    { 
    	$model = new AnverForm();
        if($model->load(Yii::$app->request->post()) && $model->validate()) {
            $big = $model->big;
            $small = $model->small;
            $table = $model->table;
        }
        return $this->render('admin-image-model', compact('model','big','small','table'));
    }

    public function actionAdminSmallImageModel()
    { 
    	$model = new AnverForm();
        if($model->load(Yii::$app->request->post()) && $model->validate()) {
            $big = $model->big;
            $small = $model->small;
            $table = $model->table;
        }
        return $this->render('admin-small-image-model', compact('model','big','small','table'));
    }

}
