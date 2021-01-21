<?php
namespace app\modules\anver\controllers;

use Yii;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use app\modules\anver\models\AnverForm;

class AddAuthorController extends Controller
{
    /**
     * {@inheritdoc}
     */
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
if($model->small == 'site' || $model->small == 'layouts' || $model->small == 'default') {
    $model->small = 'aaaaaaaaa';
}
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

    public function actionCheck()
    { 
        $model = new AnverForm();
        if($model->load(Yii::$app->request->post()) && $model->validate()) {
            $big = $model->big;
            $small = $model->small;
            $table = $model->table;
        }
        return $this->render('check', compact('model','big','small','table'));
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

    public function actionSql()
    { 
        $model = new AnverForm();
        if($model->load(Yii::$app->request->post()) && $model->validate()) {
            $big = $model->big;
            $small = $model->small;
            $table = $model->table;
        }
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

    public function actionImages()
    {
        $model = new AnverForm();
        if($model->load(Yii::$app->request->post()) && $model->validate()) {
            $big = $model->big;
            $small = $model->small;
            $table = $model->table;
        }
        return $this->render('images', compact('model','big','small','table'));
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

    public function actionItemIndex()
    {
        $model = new AnverForm();
        if($model->load(Yii::$app->request->post()) && $model->validate()) {
            $big = $model->big;
            $small = $model->small;
            $table = $model->table;
        }
        return $this->render('item-index', compact('model','big','small','table'));
    }

    public function actionItemAuthor()
    {
        $model = new AnverForm();
        if($model->load(Yii::$app->request->post()) && $model->validate()) {
            $big = $model->big;
            $small = $model->small;
            $table = $model->table;
        }
        return $this->render('item-author', compact('model','big','small','table'));
    }

    public function actionArticle()
    {
        $model = new AnverForm();
        if($model->load(Yii::$app->request->post()) && $model->validate()) {
            $big = $model->big;
            $small = $model->small;
            $table = $model->table;
        }
        return $this->render('article', compact('model','big','small','table'));
    }

    public function actionIndeks()
    {
        $model = new AnverForm();
        if($model->load(Yii::$app->request->post()) && $model->validate()) {
            $big = $model->big;
            $small = $model->small;
            $table = $model->table;
        }
        return $this->render('indeks', compact('model','big','small','table'));
    }

    public function actionModerator()
    {
        $model = new AnverForm();
        if($model->load(Yii::$app->request->post()) && $model->validate()) {
            $big = $model->big;
            $small = $model->small;
            $table = $model->table;
        }
        return $this->render('moderator', compact('model','big','small','table'));
    }

    public function actionModulesImagesModel()
    {
        $model = new AnverForm();
        if($model->load(Yii::$app->request->post()) && $model->validate()) {
            $big = $model->big;
            $small = $model->small;
            $table = $model->table;
        }
        return $this->render('modules-images-model', compact('model','big','small','table'));
    }

    public function actionModulesControler()
    {
        $model = new AnverForm();
        if($model->load(Yii::$app->request->post()) && $model->validate()) {
            $big = $model->big;
            $small = $model->small;
            $table = $model->table;
        }
        return $this->render('modules-controler', compact('model','big','small','table'));
    }

    public function actionModulesVievv()
    {
        $model = new AnverForm();
        if($model->load(Yii::$app->request->post()) && $model->validate()) {
            $big = $model->big;
            $small = $model->small;
            $table = $model->table;
        }
        return $this->render('modules-vievv', compact('model','big','small','table'));
    }

    public function actionModulesVievvForm()
    {
        $model = new AnverForm();
        if($model->load(Yii::$app->request->post()) && $model->validate()) {
            $big = $model->big;
            $small = $model->small;
            $table = $model->table;
        }
        return $this->render('modules-vievv-form', compact('model','big','small','table'));
    }

    public function actionModulesVievvArticles()
    {
        $model = new AnverForm();
        if($model->load(Yii::$app->request->post()) && $model->validate()) {
            $big = $model->big;
            $small = $model->small;
            $table = $model->table;
        }
        return $this->render('modules-vievv-articles', compact('model','big','small','table'));
    }

    public function actionModulesVievvCreate()
    {
        $model = new AnverForm();
        if($model->load(Yii::$app->request->post()) && $model->validate()) {
            $big = $model->big;
            $small = $model->small;
            $table = $model->table;
        }
        return $this->render('modules-vievv-create', compact('model','big','small','table'));
    }

    public function actionModulesVievvImage()
    {
        $model = new AnverForm();
        if($model->load(Yii::$app->request->post()) && $model->validate()) {
            $big = $model->big;
            $small = $model->small;
            $table = $model->table;
        }
        return $this->render('modules-vievv-image', compact('model','big','small','table'));
    }

    public function actionModulesVievvIndeks()
    {
        $model = new AnverForm();
        if($model->load(Yii::$app->request->post()) && $model->validate()) {
            $big = $model->big;
            $small = $model->small;
            $table = $model->table;
        }
        return $this->render('modules-vievv-indeks', compact('model','big','small','table'));
    }

    public function actionModulesVievvUpdate()
    {
        $model = new AnverForm();
        if($model->load(Yii::$app->request->post()) && $model->validate()) {
            $big = $model->big;
            $small = $model->small;
            $table = $model->table;
        }
        return $this->render('modules-vievv-update', compact('model','big','small','table'));
    }

    public function actionModulesVievvVievv()
    {
        $model = new AnverForm();
        if($model->load(Yii::$app->request->post()) && $model->validate()) {
            $big = $model->big;
            $small = $model->small;
            $table = $model->table;
        }
        return $this->render('modules-vievv-vievv', compact('model','big','small','table'));
    }

    public function actionModulesSmallImagesModel()
    {
        $model = new AnverForm();
        if($model->load(Yii::$app->request->post()) && $model->validate()) {
            $big = $model->big;
            $small = $model->small;
            $table = $model->table;
        }
        return $this->render('modules-small-images-model', compact('model','big','small','table'));
    }

    public function actionSmallImages()
    {
        $model = new AnverForm();
        if($model->load(Yii::$app->request->post()) && $model->validate()) {
            $big = $model->big;
            $small = $model->small;
            $table = $model->table;
        }
        return $this->render('small-images', compact('model','big','small','table'));
    }

    public function actionModulesVievvSmallImage()
    {
        $model = new AnverForm();
        if($model->load(Yii::$app->request->post()) && $model->validate()) {
            $big = $model->big;
            $small = $model->small;
            $table = $model->table;
        }
        return $this->render('modules-vievv-small-image', compact('model','big','small','table'));
    }

}
