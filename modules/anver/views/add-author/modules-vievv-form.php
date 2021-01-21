<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>
<h1 style="font-size: 28px;margin-bottom: 10px;">anver/modules-vievv-form</h1>
<span style="font-size: 32px;color: red;">15</span>
<hr>
<?php
$filename = '../modules/admin/views/' . $small . '/_form.php';
?>
<?php if (file_exists($filename)): ?>
Файл <?= $filename; ?> <span style="color: red;">уже существует!</span>
<hr>
<?php else: ?>
<?php
$myfile = fopen($filename, "w") or die("Не удается открыть файл!");
$txt =
"<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use app\models\Rubrika;
\$rubrikas = Rubrika::find()->all();
use yii\helpers\ArrayHelper;
\$items = ArrayHelper::map(\$rubrikas,'id','name');
?>
<!-- я и author -->
<?php if(Yii::\$app->user->identity->username == 'anver1' || Yii::\$app->user->identity->username == '$small'):?>
<div class=\"plavanie-vsamare-form\">

    <?php \$form = ActiveForm::begin(); ?>

    <?php //echo \$form->field(\$model, 'id')->textInput() ?>

    <?= \$form->field(\$model, 'title')->textInput(['maxlength' => true]) ?>

    <?= \$form->field(\$model, 'img_small')->textInput(['maxlength' => true]) ?>

<?php
\$dir = 'images/authors/small$small';
\$files1 = scandir(\$dir);
\$count = 0;
?>
<?php foreach (\$files1 as \$value):?>
<?php if(\$value != '.' && \$value != '..'): ?>
<?php \$count = \$count + 1; ?>
<?php \$qw = '/\.jpg|\.jpeg|\.gif|\.png/'; ?> 
<?php if(preg_match(\$qw, \$value)): ?>
<div style=\"display: inline-block; border: 1px solid #ccc; margin: 20px; padding: 10px;\">
<img src=\"/images/authors/small$small/<?= \$value ?>\" width=\"100px\">
<br>
<span style=\"margin: 10px 0; display: inline-block;\">
	<?= \$value ?>
</span>
</div>
<?php endif; ?>
<?php endif; ?>
<?php endforeach; ?>
<?php if(\$count == 0): ?>
<span style=\"color:red\">В папку small$small не загружены изображения</span>
<?php endif; ?>
<hr>

    <?= \$form->field(\$model, 'description')->textInput(['maxlength' => true]) ?>

    <?php 
    echo \$form->field(\$model, 'text')->widget(CKEditor::className(),[
    'editorOptions' => [
        'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
        'inline' => false, //по умолчанию false
    ],
    ]);
    ?>

<!-- Добавить, когда появятся рубрики. По умолчанию добавляется Разное -->
<?php echo \$form->field(\$model, 'rubrika')->dropDownList(\$items) ?>

    <?php // echo \$form->field(\$model, 'data')->textInput() ?>

    <div class=\"form-group\">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<hr>
<?php
\$dir = 'images/authors/$small';
\$files1 = scandir(\$dir);
\$count1 = 0;
?>
<?php foreach (\$files1 as \$value):?>
<?php if(\$value != '.' && \$value != '..'): ?>
<?php \$count1 = \$count1 + 1; ?>
<?php \$qw = '/\.jpg|\.jpeg|\.gif|\.png/'; ?> 
<?php if(preg_match(\$qw, \$value)): ?>
<div style=\"display: inline-block; border: 1px solid #ccc; margin: 20px; padding: 10px;\">
<img src=\"/images/authors/$small/<?= \$value ?>\" width=\"100px\">
<br>
<span style=\"margin: 10px 0; display: inline-block;\">
	/images/authors/$small/<?= \$value ?>
</span>
</div>
<?php endif; ?>
<?php endif; ?>
<?php endforeach; ?>
<?php endif; ?>
<?php if(\$count1 == 0): ?>
<span style=\"color:red\">В папку $small не загружены изображения</span>
<?php endif; ?>

";
fwrite($myfile, $txt);
fclose($myfile);
?>
<?php endif; ?>
<?php
$form = ActiveForm::begin(['action' => 'modules-vievv-articles']);
echo $form->field($model, 'big');
echo $form->field($model, 'small');
echo $form->field($model, 'table');
echo Html::submitButton('в modules-vievv-articles');
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