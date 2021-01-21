<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>
<h1 style="font-size: 28px;margin-bottom: 10px;">DeleteAuthor/Vievv</h1>
<span style="font-size: 32px;color: red;">3</span>
<hr>
<?php
$filename = '../views/' . $small;
$filename1 = $filename . '/_item_author.php';
$filename2 = $filename . '/_item_index.php';
$filename3 = $filename . '/article.php';
$filename4 = $filename . '/index.php';
$filename5 = $filename . '/moderator.php';
?>
<?php if (file_exists($filename)): ?>
<!-- удаляем из папки _item_author.php -->
<?php if (file_exists($filename1)): ?>
<?php unlink($filename1); ?>
<?php else: ?>
<?= $filename1; ?> - Такого в папке views/<?= $filename; ?> нет
<?php endif; ?>
<!-- удаляем из папки _item_index.php -->
<?php if (file_exists($filename2)): ?>
<?php unlink($filename2); ?>
<?php else: ?>
<?= $filename2; ?> - Такого в папке views/<?= $filename; ?> нет
<?php endif; ?>
<!-- удаляем из папки article.php -->
<?php if (file_exists($filename3)): ?>
<?php unlink($filename3); ?>
<?php else: ?>
<?= $filename3; ?> - Такого в папке views/<?= $filename; ?> нет
<?php endif; ?>
<!-- удаляем из папки index.php -->
<?php if (file_exists($filename4)): ?>
<?php unlink($filename4); ?>
<?php else: ?>
<?= $filename4; ?> - Такого в папке views/<?= $filename; ?> нет
<?php endif; ?>
<!-- удаляем из папки moderator.php -->
<?php if (file_exists($filename5)): ?>
<?php unlink($filename5); ?>
<?php else: ?>
<?= $filename5; ?> - Такого в папке views/<?= $filename; ?> нет
<?php endif; ?>
<!-- удаляем саму папку -->
<?php rmdir($filename); ?>
<?php else: ?>
<?= $filename; ?> - Такой папки в папке controllers нет
<?php endif; ?>
<hr>
<?php
$form = ActiveForm::begin(['action' => '/anver/delete-author/model']);
echo $form->field($model, 'big');
echo $form->field($model, 'small');
echo $form->field($model, 'table');
echo Html::submitButton('в model');
ActiveForm::end();
?>
<br>
<?php
$filename = '../models/authors/' . $big . '.php';
?>
<?php if (file_exists($filename)): ?>
Файл <?= $filename; ?> еще есть в папке models
<?php else: ?>
<?= $filename; ?> - Такого файла в папке models нет
<?php endif; ?>
<div style="width: 100%; height: 50px;"></div>
