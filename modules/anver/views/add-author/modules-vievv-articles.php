<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>
<h1 style="font-size: 28px;margin-bottom: 10px;">anver/modules-vievv-articles</h1>
<span style="font-size: 32px;color: red;">16</span>
<hr>
<?php
$filename = '../modules/admin/views/' . $small . '/articles.php';
?>
<?php if (file_exists($filename)): ?>
Файл <?= $filename; ?> <span style="color: red;">уже существует!</span>
<hr>
<?php else: ?>
<?php
$myfile = fopen($filename, "w") or die("Не удается открыть файл!");
$txt =
"<!-- я и author -->
<?php if(Yii::\$app->user->identity->username == 'anver1' || Yii::\$app->user->identity->username == '$small'):?>
<p style=\"border: 1px solid red; margin: 15px 0; padding: 10px;\">
    Если статья красного цвета, значит она еще не прошла модерацию.
</p>
<?php foreach(\$articles as \$article): ?>
<?php if(\$article->moderator == 0): ?>
<div style=\"color: red;\">
<?php else: ?>
<div style=\"color: #444;\">
<?php endif; ?>
<h2 style=\"font-size: 24px;\"><?= \$article->title; ?></h2>
<p><?= \$article->description; ?></p>    
</div>
<?php endforeach; ?>
<?php endif; ?>

";
fwrite($myfile, $txt);
fclose($myfile);
?>
<?php endif; ?>
<?php
$form = ActiveForm::begin(['action' => 'modules-vievv-create']);
echo $form->field($model, 'big');
echo $form->field($model, 'small');
echo $form->field($model, 'table');
echo Html::submitButton('в modules-vievv-create');
ActiveForm::end();
?>
<br>
<?php
$dir = '../modules/admin/views/' . $small;
$files1 = scandir($dir);
echo "<pre>";
print_r($files1);
echo "</pre>";
?>
<div style="width: 100%;height: 100px"></div>