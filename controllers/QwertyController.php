<?php

namespace app\controllers;
use Yii;
use app\models\authors\Qwerty;
use yii\web\NotFoundHttpException;

class QwertyController extends \yii\web\Controller
{
    public function actionIndex()
    {
    return $this->render('index');
    }
    public function actionArticle($id)
    {
    $article = Qwerty::find()->where('id = :id', [':id' => $id])->one();
if (!$article = Qwerty::find()->where('id = :id', [':id' => $id])->one()) {
throw new NotFoundHttpException('Статья не найдена!', 404);
}
    return $this->render('article',compact('article'));
    }
}
