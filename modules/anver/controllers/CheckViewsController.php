<?php
namespace app\modules\anver\controllers;
use app\models\Authors;

class CheckViewsController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$authors = Authors::find()->asArray()->all();
        return $this->render('index', compact('authors'));
    }

}
