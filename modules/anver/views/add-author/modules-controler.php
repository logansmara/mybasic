<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>
<h1 style="font-size: 28px;margin-bottom: 10px;">anver/modules-controler</h1>
<span style="font-size: 32px;color: red;">13</span>
<hr>
<?php
$bigcontroler = $big . 'Controller';
$imagebig = 'Image' . $big;
$usefilter = 'use yii\filters\VerbFilter';
$useimage = 'use app\modules\admin\models\Image' . $big;
$usesmallimage = 'use app\modules\admin\models\SmallImage' . $big;
$filename = '../modules/admin/controllers/' . $big . 'Controller.php';
?>
<?php if (file_exists($filename)): ?>
Файл <?= $filename; ?> <span style="color: red;">уже существует!</span>
<hr>
<?php else: ?>
<?php
$myfile = fopen($filename, "w") or die("Не удается открыть файл!");
$txt =
"<?php
namespace app\modules\admin\controllers;
use Yii;
use app\models\authors\\$big;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
$usefilter;
use yii\web\UploadedFile;
$useimage;
$usesmallimage;

class $bigcontroler extends Controller
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
        \$dataProvider = new ActiveDataProvider([
            'query' => $big::find(),
        ]);
        return \$this->render('index', [
            'dataProvider' => \$dataProvider,
        ]);
    }
    public function actionImage() {
        \$model = new $imagebig();
        if (Yii::\$app->request->isPost) {
            if(!isset(\$_REQUEST['delete'])) {
                \$model->imageFile = UploadedFile::getInstance(\$model, 'imageFile');
            if (\$model->upload()) {
                return \$this->refresh();
            }
            }
            if(isset(\$_REQUEST['delete'])) {
                \$qw = \$_REQUEST['delete'];
                unlink(\"images/authors/$small/{\$qw}\");
            }
        }
        return \$this->render('image', compact('model'));
    }

    public function actionSmallImage() {
        \$model = new Small$imagebig();
        if (Yii::\$app->request->isPost) {
            if(!isset(\$_REQUEST['delete'])) {
                \$model->imageFile = UploadedFile::getInstance(\$model, 'imageFile');
            if (\$model->upload()) {
                return \$this->refresh();
            }
            }
            if(isset(\$_REQUEST['delete'])) {
                \$qw = \$_REQUEST['delete'];
                unlink(\"images/authors/small$small/{\$qw}\");
            }
        }
        return \$this->render('small-image', compact('model'));
    }

    public function actionArticles() {
        \$articles = $big::find()->all();
        return \$this->render('articles', compact('articles'));
    }
    public function actionView(\$id)
    {
        return \$this->render('view', [
            'model' => \$this->findModel(\$id),
        ]);
    }
    public function actionCreate()
    {
    \$model = new $big();
    if (\$model->load(Yii::\$app->request->post())) {
    /* не пропустить инъекцию */
    if(strpos(\$model->title,'<script') === false &&
       strpos(\$model->description,'<script') === false &&
       strpos(\$model->text,'<script') === false &&
       strpos(\$model->img_small,'<script') === false && strpos(\$model->title,'<iframe') === false &&
       strpos(\$model->description,'<iframe') === false &&
       strpos(\$model->text,'<iframe') === false &&
       strpos(\$model->img_small,'<iframe') === false) {
            if(\$model->save()) {
            return \$this->redirect(['view', 'id' => \$model->id]);
            }
            }
        }
        return \$this->render('create', [
            'model' => \$model,
        ]);
    }
    public function actionUpdate(\$id)
    {
    \$model = \$this->findModel(\$id);
    if (\$model->load(Yii::\$app->request->post())) {
    /* не пропустить инъекцию */
    if(strpos(\$model->title,'script') === false &&
       strpos(\$model->description,'script') === false &&
       strpos(\$model->text,'script') === false &&
       strpos(\$model->img_small,'script') === false) {
        if(\$model->save()) {
            return \$this->redirect(['view', 'id' => \$model->id]);
        }
    }
}
        return \$this->render('update', [
            'model' => \$model,
        ]);
    }
    public function actionDelete(\$id)
    {
        \$this->findModel(\$id)->delete();
        return \$this->redirect(['index']);
    }
    protected function findModel(\$id)
    {
        if ((\$model = $big::find()->where('id = :id', [':id' => \$id])->one()) !== null) {
            return \$model;
        }
        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
";
fwrite($myfile, $txt);
fclose($myfile);
?>
<?php endif; ?>
<?php
$form = ActiveForm::begin(['action' => 'modules-vievv']);
echo $form->field($model, 'big');
echo $form->field($model, 'small');
echo $form->field($model, 'table');
echo Html::submitButton('в modules-vievv');
ActiveForm::end();
?>
<br>
<?php
echo $filename = '../modules/admin/views/' . $small;
?>
<?php if (file_exists($filename)): ?>
Файл <?= $filename; ?> <span style="color: red;">уже существует!</span>
<?php else: ?>
Файла <?= $filename; ?> <span style="color: green;">еще нет</span>
<?php endif; ?>

<div style="width: 100%; height: 50px;"></div>