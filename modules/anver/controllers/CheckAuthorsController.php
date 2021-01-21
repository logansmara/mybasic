<?php
namespace app\modules\anver\controllers;
use app\models\Authors;

class CheckAuthorsController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$authors = Authors::find()->all();
        return $this->render('index', compact('authors'));
    }

}
