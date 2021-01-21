<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>
<h1 style="font-size: 28px;margin-bottom: 10px;">DeleteAuthor/Controler</h1>
<span style="font-size: 32px;color: red;">5</span>
<hr>
<?php
$filename = '../modules/admin/controllers/' . $big . 'Controller.php';
?>
<?php if (file_exists($filename)): ?>
<?php unlink($filename); ?>
<?php else: ?>
<?= $filename; ?> - Такого файла в папке controllers нет
<?php endif; ?>
<hr>
<?php
$form = ActiveForm::begin(['action' => '/anver/delete-author/admin-vievv']);
echo $form->field($model, 'big');
echo $form->field($model, 'small');
echo $form->field($model, 'table');
echo Html::submitButton('в admin-vievv');
ActiveForm::end();
?>
<br>
<?php
$filename = '../modules/admin/views/' . $small;
?>
<?php if (file_exists($filename)): ?>
Папка <?= $filename ?> еще не удалена
<?php else: ?>
Папки <?= $filename ?> уже нет
<?php endif; ?>
<div style="width: 100%; height: 50px;"></div>
