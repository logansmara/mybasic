<?php
namespace app\modules\anver\controllers;
use app\models\Authors;

class CheckAuthorsAllController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$authors = Authors::find()->all();
        return $this->render('index', compact('authors'));
    }

}
