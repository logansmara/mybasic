<?php
namespace app\modules\admin\controllers;
use Yii;
use app\models\authors\KsyushaDelaet;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use app\modules\admin\models\ImageKsyushaDelaet;
use app\modules\admin\models\SmallImageKsyushaDelaet;

class KsyushaDelaetController extends Controller
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
        $dataProvider = new ActiveDataProvider([
            'query' => KsyushaDelaet::find(),
        ]);
        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionImage() {
        $model = new ImageKsyushaDelaet();
        if (Yii::$app->request->isPost) {
            if(!isset($_REQUEST['delete'])) {
                $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if ($model->upload()) {
                return $this->refresh();
            }
            }
            if(isset($_REQUEST['delete'])) {
                $qw = $_REQUEST['delete'];
                unlink("images/authors/ksyusha-delaet/{$qw}");
            }
        }
        return $this->render('image', compact('model'));
    }

    public function actionSmallImage() {
        $model = new SmallImageKsyushaDelaet();
        if (Yii::$app->request->isPost) {
            if(!isset($_REQUEST['delete'])) {
                $model->imageFile = UploadedFile::getInstance($model, 'imageFile');
            if ($model->upload()) {
                return $this->refresh();
            }
            }
            if(isset($_REQUEST['delete'])) {
                $qw = $_REQUEST['delete'];
                unlink("images/authors/smallksyusha-delaet/{$qw}");
            }
        }
        return $this->render('small-image', compact('model'));
    }

    public function actionArticles() {
        $articles = KsyushaDelaet::find()->all();
        return $this->render('articles', compact('articles'));
    }
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }
    public function actionCreate()
    {
    $model = new KsyushaDelaet();
    if ($model->load(Yii::$app->request->post())) {
    /* не пропустить инъекцию */
    if(strpos($model->title,'<script') === false &&
       strpos($model->description,'<script') === false &&
       strpos($model->text,'<script') === false &&
       strpos($model->img_small,'<script') === false && strpos($model->title,'<iframe') === false &&
       strpos($model->description,'<iframe') === false &&
       strpos($model->text,'<iframe') === false &&
       strpos($model->img_small,'<iframe') === false) {
            if($model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
            }
            }
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }
    public function actionUpdate($id)
    {
    $model = $this->findModel($id);
    if ($model->load(Yii::$app->request->post())) {
    /* не пропустить инъекцию */
    if(strpos($model->title,'script') === false &&
       strpos($model->description,'script') === false &&
       strpos($model->text,'script') === false &&
       strpos($model->img_small,'script') === false) {
        if($model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }
    }
}
        return $this->render('update', [
            'model' => $model,
        ]);
    }
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();
        return $this->redirect(['index']);
    }
    protected function findModel($id)
    {
        if (($model = KsyushaDelaet::find()->where('id = :id', [':id' => $id])->one()) !== null) {
            return $model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
