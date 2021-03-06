<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use mihaildev\ckeditor\CKEditor;
use app\models\Rubrika;
$rubrikas = Rubrika::find()->all();
/*
ArrayHelper - Получение пар ключ-значение
https://www.yiiframework.com/doc/guide/2.0/ru/helper-array
*/
use yii\helpers\ArrayHelper;
$items = ArrayHelper::map($rubrikas,'id','name');
?>
<!-- я и author -->
<?php if(Yii::$app->user->identity->username == 'anver1' || Yii::$app->user->identity->username == 'ksyusha-delaet'):?>
<div class="plavanie-vsamare-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php //echo $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'img_small')->textInput(['maxlength' => true]) ?>

<?php
$dir = 'images/authors/smallksyusha-delaet';
$files1 = scandir($dir);
$count = 0;
?>
<?php foreach ($files1 as $value):?>
<?php if($value != '.' && $value != '..'): ?>
<?php $count = $count + 1; ?>
<?php $qw = '/\.jpg|\.jpeg|\.gif|\.png/'; ?> 
<?php if(preg_match($qw, $value)): ?>
<div style="display: inline-block; border: 1px solid #ccc; margin: 20px; padding: 10px;">
<img src="/images/authors/smallksyusha-delaet/<?= $value ?>" width="100px">
<br>
<span style="margin: 10px 0; display: inline-block;">
	<?= $value ?>
</span>
</div>
<?php endif; ?>
<?php endif; ?>
<?php endforeach; ?>
<?php if($count == 0): ?>
<span style="color:red">В папку smallksyusha-delaet не загружены изображения</span>
<?php endif; ?>
<hr>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?php 
    echo $form->field($model, 'text')->widget(CKEditor::className(),[
    'editorOptions' => [
        'preset' => 'full', //разработанны стандартные настройки basic, standard, full данную возможность не обязательно использовать
        'inline' => false, //по умолчанию false
    ],
    ]);
    ?>

<!-- Добавить, когда появятся рубрики. По умолчанию добавляется Разное -->
<?php echo $form->field($model, 'rubrika')->dropDownList($items) ?>

    <?php // echo $form->field($model, 'data')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<hr>
<?php
$dir = 'images/authors/ksyusha-delaet';
$files1 = scandir($dir);
$count1 = 0;
?>
<?php foreach ($files1 as $value):?>
<?php if($value != '.' && $value != '..'): ?>
<?php $count1 = $count1 + 1; ?>
<?php $qw = '/\.jpg|\.jpeg|\.gif|\.png/'; ?> 
<?php if(preg_match($qw, $value)): ?>
<div style="display: inline-block; border: 1px solid #ccc; margin: 20px; padding: 10px;">
<img src="/images/authors/ksyusha-delaet/<?= $value ?>" width="100px">
<br>
<span style="margin: 10px 0; display: inline-block;">
	/images/authors/ksyusha-delaet/<?= $value ?>
</span>
</div>
<?php endif; ?>
<?php endif; ?>
<?php endforeach; ?>
<?php endif; ?>
<?php if($count1 == 0): ?>
<span style="color:red">В папку ksyusha-delaet не загружены изображения</span>
<?php endif; ?>

