<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>
<h1 style="font-size: 28px;margin-bottom: 10px;">anver/modules-vievv</h1>
<span style="font-size: 32px;color: red;">14</span>
<hr>
<?php
$filename = '../modules/admin/views/' . $small;
if (!file_exists($filename)) {
	mkdir($filename, 0777, true);
    
} else {
    echo "Файл $filename <span style='color: red;'>уже существует!</span><hr>";
}
?>
<?php
$form = ActiveForm::begin(['action' => 'modules-vievv-form']);
echo $form->field($model, 'big');
echo $form->field($model, 'small');
echo $form->field($model, 'table');
echo Html::submitButton('в modules-vievv-form');
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
