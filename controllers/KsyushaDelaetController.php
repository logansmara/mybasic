<?php

namespace app\controllers;
use Yii;
use app\models\authors\KsyushaDelaet;
use yii\web\NotFoundHttpException;

class KsyushaDelaetController extends \yii\web\Controller
{
    public function actionIndex()
    {
    return $this->render('index');
    }
    public function actionArticle($id)
    {
    $article = KsyushaDelaet::find()->where('id = :id', [':id' => $id])->one();
if (!$article = KsyushaDelaet::find()->where('id = :id', [':id' => $id])->one()) {
throw new NotFoundHttpException('Статья не найдена!', 404);
}
    return $this->render('article',compact('article'));
    }
}
