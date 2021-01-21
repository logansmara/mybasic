<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>
<h1 style="font-size: 28px;margin-bottom: 10px;">DeleteAuthor/Controler</h1>
<span style="font-size: 32px;color: red;">2</span>
<hr>
<?php
$filename = '../controllers/' . $big . 'Controller.php';
?>
<?php if (file_exists($filename)): ?>
<?php unlink($filename); ?>
<?php else: ?>
<?= $filename; ?> - Файла в папке controllers больше нет
<hr>
<?php endif; ?>
<?php
$form = ActiveForm::begin(['action' => '/anver/delete-author/vievv']);
echo $form->field($model, 'big');
echo $form->field($model, 'small');
echo $form->field($model, 'table');
echo Html::submitButton('в vievv');
ActiveForm::end();
?>
<br>
<?php
$filename = '../views/' . $small;
?>
<?php if (file_exists($filename)): ?>
<span style="color: green;">Папка <?= $filename ?> еще не удалена</span>
<?php else: ?>
<span style="color: red;">Папки <?= $filename ?> нет</span>
<?php endif; ?>
<div style="width: 100%; height: 50px;"></div>
