<?php
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
<?php if(Yii::$app->user->identity->username == 'anver1' || Yii::$app->user->identity->username == 'shablon4'):?>
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>
    <?= $form->field($model, 'imageFile')->fileInput() ?>
    <?= Html::submitButton('Загрузить') ?>
<?php ActiveForm::end() ?>
<hr>
<?php
$dir = 'images/authors/shablon4';
$files1 = scandir($dir);
?>
<?php foreach ($files1 as $value):?>
<?php if($value != '.' && $value != '..'): ?>
<?php $qw = '/\.jpg|\.jpeg|\.gif|\.png/'; ?> 
<?php if(preg_match($qw, $value)): ?>
<div style="display: inline-block; border: 1px solid #ccc; margin: 20px; padding: 10px;">
<img src="/images/authors/shablon4/<?= $value ?>" width="100px">
<br>
<span style="margin: 10px 0; display: inline-block;">
	<?= $value ?>
</span>
<?php $form1 = ActiveForm::begin([]) ?>
    <input type="hidden" name="delete" value="<?= $value ?>">
    <?= Html::submitButton('Удалить') ?>
<?php ActiveForm::end() ?>
</div>
<?php endif; ?>
<?php endif; ?>
<?php endforeach; ?>
<?php endif; ?>

