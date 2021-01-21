<?php

namespace app\modules\admin\controllers;

use yii\web\Controller;
// добавляем после создания этого модуля в gii
use yii\filters\AccessControl;


class DefaultController extends Controller
{
    // добавляем после создания этого модуля в gii
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }

    public function actionIndex()
    {
        return $this->render('index');
    }
}
