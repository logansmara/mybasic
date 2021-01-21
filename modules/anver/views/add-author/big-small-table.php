<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>
<h1 style="font-size: 28px;margin-bottom: 10px;">anver/index</h1>
<span style="font-size: 32px;color: red;">1</span>
<hr>
<?php
$form = ActiveForm::begin(['action' => 'check']);
echo $form->field($model, 'big');
echo $form->field($model, 'small');
echo $form->field($model, 'table');
echo Html::submitButton('в check');
ActiveForm::end();
?>
