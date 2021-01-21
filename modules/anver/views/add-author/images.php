<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>
<h1 style="font-size: 28px;margin-bottom: 10px;">anver/images</h1>
<span style="font-size: 32px;color: red;">4</span>
<hr>
<?php
$filename = 'images/authors/' . $small;
if (!file_exists($filename)) {
	mkdir('images/authors/' . $small, 0777, true);
    
} else {
    echo "Файл $filename <span style='color: red;'>уже существует!</span><hr>";
}
?>
<?php
$form = ActiveForm::begin(['action' => 'controler']);
echo $form->field($model, 'big');
echo $form->field($model, 'small');
echo $form->field($model, 'table');
echo Html::submitButton('в controller');
ActiveForm::end();
?>
<br>
<?php
$bigcontroler = $big . 'Controller';
$filename = '../controllers/' . $bigcontroler . '.php';
?>
<?php if (file_exists($filename)): ?>
Файл <?= $filename; ?> <span style="color: red;">уже существует!</span>
<?php else: ?>
Файла <?= $filename; ?> <span style="color: green;">еще нет</span>
<?php endif; ?>
<div style="width: 100%; height: 50px;"></div>
