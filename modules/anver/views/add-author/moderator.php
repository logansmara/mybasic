<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>
<h1 style="font-size: 28px;margin-bottom: 10px;">anver/moderator</h1>
<span style="font-size: 32px;color: red;">11</span>
<hr>
<?php
$filename = '../views/' . $small . '/moderator.php';
?>
<?php if (file_exists($filename)): ?>
Файл <?= $filename; ?> <span style="color: red;">уже существует!</span>
<hr>
<?php else: ?>
<?php
$myfile = fopen($filename, "w") or die("Не удается открыть файл!");
$txt =
"<?php
use app\models\authors\\$big;
\$vksmall = $big::find()->where(['moderator' => NULL])->all();
foreach (\$vksmall as \$vk) {
	echo '<span style=\"color:red\">' . \$vk->id . ' - ' . \$vk->title . '</span>';
}


";
fwrite($myfile, $txt);
fclose($myfile);
?>
<?php endif; ?>
<?php
$form = ActiveForm::begin(['action' => 'modules-images-model']);
echo $form->field($model, 'big');
echo $form->field($model, 'small');
echo $form->field($model, 'table');
echo Html::submitButton('в modules-images-model');
ActiveForm::end();
?>
<br>
<?php
$imagebig = 'Image' . $big;
$filename = '../modules/admin/models/' . $imagebig . '.php';
?>
<?php if (file_exists($filename)): ?>
Файл <?= $filename; ?> <span style="color: red;">уже существует!</span>
<?php else: ?>
Файла <?= $filename; ?> <span style="color: green;">еще нет</span>
<?php endif; ?>
<div style="width: 100%; height: 50px;"></div>
