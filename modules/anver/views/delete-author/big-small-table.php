<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
$vkbig = $model->small;
$vkbig = str_replace('-',' ',$vkbig);
$vkbig = ucwords($vkbig);
$vkbig = str_replace(' ','',$vkbig);
$vktable = $model->small;
$vktable = str_replace('-','_',$vktable);
?>
<h1 style="font-size: 28px;margin-bottom: 10px;">DeleteAuthor/Index</h1>
<span style="font-size: 32px;color: red;">1</span>
<hr>
<p>
Папку web/images/authors/$small и экспортированный файл из базы данных $tablt.sql не удаляем, а отправляем в архив.
</p>
<?php
$form = ActiveForm::begin(['action' => '/anver/delete-author/controler']);
echo $form->field($model, 'big');
echo $form->field($model, 'small');
echo $form->field($model, 'table');
echo Html::submitButton('в controler');
ActiveForm::end();
?>
<br>
<?php
$filename = '../controllers/' . $vkbig . 'Controller.php';
?>
<?php if (file_exists($filename)): ?>
Файл <?= $filename; ?> - еще есть в папке controllers
<?php else: ?>
<?= $filename; ?> - Такого файла в папке controllers нет
<?php endif; ?>
