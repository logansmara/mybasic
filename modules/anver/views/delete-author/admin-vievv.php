<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>
<h1 style="font-size: 28px;margin-bottom: 10px;">DeleteAuthor/Vievv</h1>
<span style="font-size: 32px;color: red;">6</span>
<hr>
<?php
$filename = '../modules/admin/views/' . $small;
$filename1 = $filename . '/_form.php';
$filename2 = $filename . '/articles.php';
$filename3 = $filename . '/create.php';
$filename4 = $filename . '/image.php';
$filename5 = $filename . '/index.php';
$filename6 = $filename . '/update.php';
$filename7 = $filename . '/view.php';
$filename8 = $filename . '/small-image.php';
?>
<?php if (file_exists($filename)): ?>
<!-- удаляем из папки _form.php -->
<?php if (file_exists($filename1)): ?>
<?php unlink($filename1); ?>
<?php else: ?>
<?= $filename1; ?> - Такого в папке views/<?= $filename; ?> нет
<?php endif; ?>
<!-- удаляем из папки articles.php -->
<?php if (file_exists($filename2)): ?>
<?php unlink($filename2); ?>
<?php else: ?>
<?= $filename2; ?> - Такого в папке views/<?= $filename; ?> нет
<?php endif; ?>
<!-- удаляем из папки create.php -->
<?php if (file_exists($filename3)): ?>
<?php unlink($filename3); ?>
<?php else: ?>
<?= $filename3; ?> - Такого в папке views/<?= $filename; ?> нет
<?php endif; ?>
<!-- удаляем из папки image.php -->
<?php if (file_exists($filename4)): ?>
<?php unlink($filename4); ?>
<?php else: ?>
<?= $filename4; ?> - Такого в папке views/<?= $filename; ?> нет
<?php endif; ?>
<!-- удаляем из папки index.php -->
<?php if (file_exists($filename5)): ?>
<?php unlink($filename5); ?>
<?php else: ?>
<?= $filename5; ?> - Такого в папке views/<?= $filename; ?> нет
<?php endif; ?>
<!-- удаляем из папки update.php -->
<?php if (file_exists($filename6)): ?>
<?php unlink($filename6); ?>
<?php else: ?>
<?= $filename6; ?> - Такого в папке views/<?= $filename; ?> нет
<?php endif; ?>
<!-- удаляем из папки view.php -->
<?php if (file_exists($filename7)): ?>
<?php unlink($filename7); ?>
<?php else: ?>
<?= $filename7; ?> - Такого в папке views/<?= $filename; ?> нет
<?php endif; ?>
<!-- удаляем из папки small-image.php -->
<?php if (file_exists($filename8)): ?>
<?php unlink($filename8); ?>
<?php else: ?>
<?= $filename8; ?> - Такого в папке views/<?= $filename; ?> нет
<?php endif; ?>
<!-- удаляем саму папку -->
<?php rmdir($filename); ?>
<?php else: ?>
<?= $filename; ?> - Такой папки в папке controllers нет
<?php endif; ?>
<hr>
<?php
$form = ActiveForm::begin(['action' => '/anver/delete-author/admin-image-model']);
echo $form->field($model, 'big');
echo $form->field($model, 'small');
echo $form->field($model, 'table');
echo Html::submitButton('в admin-image-model');
ActiveForm::end();
?>
<br>

<?php
$filename = '../modules/admin/models/Image' . $big . '.php';
?>
<?php if (file_exists($filename)): ?>
Файл <?= $filename; ?> еще не удален
<?php else: ?>
Файла <?= $filename; ?> уже нет
<?php endif; ?>
<div style="width: 100%; height: 50px;"></div>
