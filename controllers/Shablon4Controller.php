<?php

namespace app\controllers;
use Yii;
use app\models\authors\Shablon4;
use yii\web\NotFoundHttpException;

class Shablon4Controller extends \yii\web\Controller
{
    public function actionIndex()
    {
    return $this->render('index');
    }
    public function actionArticle($id)
    {
    $article = Shablon4::find()->where('id = :id', [':id' => $id])->one();
if (!$article = Shablon4::find()->where('id = :id', [':id' => $id])->one()) {
throw new NotFoundHttpException('Статья не найдена!', 404);
}
    return $this->render('article',compact('article'));
    }
}
