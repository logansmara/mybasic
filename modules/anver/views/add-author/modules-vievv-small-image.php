<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>
<h1 style="font-size: 28px;margin-bottom: 10px;">anver/modules-vievv-image</h1>
<span style="font-size: 32px;color: red;">24</span>
<hr>
<?php
$filename = '../modules/admin/views/' . $small . '/small-image.php';
?>
<?php if (file_exists($filename)): ?>
Файл <?= $filename; ?> <span style="color: red;">уже существует!</span>
<hr>
<?php else: ?>
<?php
$myfile = fopen($filename, "w") or die("Не удается открыть файл!");
$txt =
"<?php
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\helpers\Html;
?>
<style>
label {
	margin: 30px 0 20px 0;
}
</style>
<!-- я и author1 -->
<?php if(Yii::\$app->user->identity->username == 'anver1' || Yii::\$app->user->identity->username == '$small'):?>
<?php \$form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
    <?= \$form->field(\$model, 'imageFile')->fileInput() ?>
    <?= Html::submitButton('Загрузить') ?>
<?php ActiveForm::end() ?>
<hr>
<?php
\$dir = 'images/authors/small$small';
\$files1 = scandir(\$dir);
?>
<?php foreach (\$files1 as \$value):?>
<?php if(\$value != '.' && \$value != '..'): ?>
<?php \$qw = '/\.jpg|\.jpeg|\.gif|\.png/'; ?> 
<?php if(preg_match(\$qw, \$value)): ?>
<div style=\"display: inline-block; border: 1px solid #ccc; margin: 20px; padding: 10px;\">
<img src=\"/images/authors/small$small/<?= \$value ?>\" width=\"100px\">
<br>
<span style=\"margin: 10px 0; display: inline-block;\">
	<?= \$value ?>
</span>
<?php \$form1 = ActiveForm::begin([]) ?>
    <input type=\"hidden\" name=\"delete\" value=\"<?= \$value ?>\">
    <?= Html::submitButton('Удалить') ?>
<?php ActiveForm::end() ?>
</div>
<?php endif; ?>
<?php endif; ?>
<?php endforeach; ?>
<?php endif; ?>

";
fwrite($myfile, $txt);
fclose($myfile);
?>
<?php endif; ?>
<p>
Добавить пользователя в таблицу User
</p>
<a href="<?= Url::to(['/anver/authors', 'smallcreate' => $small]);?>">Перейти в админку authors</a>
<div style="width: 100%;height: 100px"></div>