<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>
<h1 style="font-size: 28px;margin-bottom: 10px;">anver/modules-vievv-update</h1>
<span style="font-size: 32px;color: red;">20</span>
<hr>
<?php
$filename = '../modules/admin/views/' . $small . '/update.php';
?>
<?php if (file_exists($filename)): ?>
Файл <?= $filename; ?> <span style="color: red;">уже существует!</span>
<hr>
<?php else: ?>
<?php
$s = 's';
$myfile = fopen($filename, "w") or die("Не удается открыть файл!");
$txt =
"<?php
use yii\helpers\Html;
\$this->title = 'Update $big: ' . \$model->title;
\$this->params['breadcrumbs'][] = ['label' => 'Админка', 'url' => ['/admin']];
\$this->params['breadcrumbs'][] = ['label' =>  '$big$s', 'url' => ['index']];
\$this->params['breadcrumbs'][] = ['label' => \$model->title, 'url' => ['view', 'id' => \$model->id]];
\$this->params['breadcrumbs'][] = 'Update';
?>
<div class=\"author1-update\">
    <h1><?= Html::encode(\$this->title) ?></h1>
    <?= \$this->render('_form', [
        'model' => \$model,
    ]) ?>
</div>

";
fwrite($myfile, $txt);
fclose($myfile);
?>
<?php endif; ?>
<?php
$form = ActiveForm::begin(['action' => 'modules-vievv-vievv']);
echo $form->field($model, 'big');
echo $form->field($model, 'small');
echo $form->field($model, 'table');
echo Html::submitButton('в modules-vievv-vievv');
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