<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>
<h1 style="font-size: 28px;margin-bottom: 10px;">DeleteAuthor/Controler</h1>
<span style="font-size: 32px;color: red;">8</span>
<hr>
<?php
$filename = '../modules/admin/models/SmallImage' . $big . '.php';
?>
<?php if (file_exists($filename)): ?>
<?php unlink($filename); ?>
<?php else: ?>
<?= $filename; ?> - Такого файла в папке models нет
<?php endif; ?>
<hr>
<p style="margin-bottom: 15px;">
Удалить пользователя из таблицы User
</p>
<a href="<?= Url::to(['/anver/authors', 'smalldelete' => $small]);?>">Перейти в админку authors</a>
<div style="width: 100%; height: 50px;"></div>
