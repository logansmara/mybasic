<?php

namespace app\controllers;
use Yii;
use app\models\Blogs;

class PdoController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$posts = Yii::$app->db->createCommand('SELECT * FROM blogs')->queryAll();
        return $this->render('index',compact('posts'));
    }

    public function actionCreate()
    {
$sqlQuery = "CREATE TABLE IF NOT EXISTS proba_pdo (name VARCHAR(20), owner VARCHAR(20))";
$sqlCommand = Yii::$app->db->createCommand($sqlQuery);
$sqlCommand->execute();
        return $this->render('create');
    }

    public function actionSql()
    { 
$table = 'table-primer';
$sqlQuery = "CREATE TABLE IF NOT EXISTS vk_" . $table . " (`id` INT(10) NOT NULL AUTO_INCREMENT , `title` varchar(255) NOT NULL,
  `moderator` int(1) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `img_small` varchar(100) NOT NULL,
  `rubrika` varchar(100) NOT NULL DEFAULT 'Разное',
  `data` timestamp NOT NULL DEFAULT current_timestamp() , PRIMARY KEY (`id`)) ENGINE = MyISAM CHARSET=utf8mb4 COLLATE utf8mb4_general_ci";
$sqlCommand = Yii::$app->db->createCommand($sqlQuery);
$sqlCommand->execute();
        return $this->render('sql', compact('model','big','small','table'));
    }

    public function actionView()
    {
        return $this->render('view');
    }
}
