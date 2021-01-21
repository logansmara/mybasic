<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
$table1 = 'vk_' . $table;
?>
<br>
<?php if(\Yii::$app->db->getTableSchema($table1, true) !== null): ?>
<span style="color: red">
	таблица <?= $table1 ?> <span style="color: red;">уже существует!</span>
</span>
<?php else: ?>
<span style="color: green">
	таблицы <?= $table1 ?> - нет
</span>
<?php endif; ?>
<br>
<?php
$view = '../views/' . $small;
if (file_exists($view)): ?>
<span style="color: red">
    Папка <?= $view; ?> уже существует!
</span>
<?php else: ?>
<span style="color: green">
	папки <?= $view; ?> - нет
</span>
<?php endif; ?>
<br>
<?php
$controller = '../controllers/' . $big . 'Controller.php';
if (file_exists($controller)): ?>
<span style="color: red">
    файл <?= $controller; ?> уже существует!
</span>
<?php else: ?>
<span style="color: green">
	файла <?= $controller; ?> - нет
</span>
<?php endif; ?>
<br>
<?php
$model1 = '../models/authors/' . $big . '.php';
if (file_exists($model1)): ?>
<span style="color: red">
    файл <?= $model1; ?> уже существует!
</span>
<?php else: ?>
<span style="color: green">
	файла <?= $model1; ?> - нет
</span>
<?php endif; ?>
<br>
<?php
$modulescontroller = '../modules/admin/controllers/' . $big . 'Controller.php';
if (file_exists($modulescontroller)): ?>
<span style="color: red">
    файл <?= $modulescontroller; ?> уже существует!
</span>
<?php else: ?>
<span style="color: green">
	файла <?= $modulescontroller; ?> - нет
</span>
<?php endif; ?>
<br>
<?php
$modulesview = '../modules/admin/views/' . $small;
if (file_exists($modulesview)): ?>
<span style="color: red">
    Папка <?= $modulesview; ?> уже существует!
</span>
<?php else: ?>
<span style="color: green">
	папки <?= $modulesview; ?> - нет
</span>
<?php endif; ?>
<br>
<?php
$modulesmodel2 = '../modules/admin/models/Image' . $big . '.php';
if (file_exists($modulesmodel2)): ?>
<span style="color: red">
    файл <?= $modulesmodel2; ?> уже существует!
</span>
<?php else: ?>
<span style="color: green">
	файла <?= $modulesmodel2; ?> - нет
</span>
<?php endif; ?>
<br>
<?php
$modulesmodel3 = '../modules/admin/models/SmallImage' . $big . '.php';
if (file_exists($modulesmodel3)): ?>
<span style="color: red">
    файл <?= $modulesmodel3; ?> уже существует!
</span>
<?php else: ?>
<span style="color: green">
	файла <?= $modulesmodel3; ?> - нет
</span>
<?php endif; ?>
<br>
<br>
<hr>
<?php
$form = ActiveForm::begin(['action' => 'model']);
echo $form->field($model, 'big');
echo $form->field($model, 'small');
echo $form->field($model, 'table');
echo Html::submitButton('в model');
ActiveForm::end();
?>
