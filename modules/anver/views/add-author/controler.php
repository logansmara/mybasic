<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>
<h1 style="font-size: 28px;margin-bottom: 10px;">anver/controler</h1>
<span style="font-size: 32px;color: red;">5</span>
<hr>
<?php
$bigcontroler = $big . 'Controller';
$filename = '../controllers/' . $bigcontroler . '.php';
?>
<?php if (file_exists($filename)): ?>
Файл <?= $filename; ?> <span style="color: red;">уже существует!</span>
<hr>
<?php else: ?>
<?php
$myfile = fopen($filename, "w") or die("Не удается открыть файл!");
$txt =
"<?php

namespace app\controllers;
use Yii;
use app\models\authors\\$big;
use yii\web\NotFoundHttpException;

class $bigcontroler extends \yii\web\Controller
{
    public function actionIndex()
    {
    return \$this->render('index');
    }
    public function actionArticle(\$id)
    {
    \$article = $big::find()->where('id = :id', [':id' => \$id])->one();
if (!\$article = $big::find()->where('id = :id', [':id' => \$id])->one()) {
throw new NotFoundHttpException('Статья не найдена!', 404);
}
    return \$this->render('article',compact('article'));
    }
}
";
fwrite($myfile, $txt);
fclose($myfile);
?>
<?php endif; ?>
<?php
$form = ActiveForm::begin(['action' => 'vievv']);
echo $form->field($model, 'big');
echo $form->field($model, 'small');
echo $form->field($model, 'table');
echo Html::submitButton('в vievv');
ActiveForm::end();
?>
<br>
<?php
echo $controller = '../views/' . $small;
if (file_exists($controller)): ?>
<span style="color: red">
    Папка <?= $controller; ?> уже существует!
</span>
<?php else: ?>
<span style="color: green">
    Папки <?= $controller; ?> - еще нет
</span>
<?php endif; ?>
