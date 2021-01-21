<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>
<h1 style="font-size: 28px;margin-bottom: 10px;">anver/index</h1>
<span style="font-size: 32px;color: red;">1</span>
<hr>
<?php
$form = ActiveForm::begin(['action' => 'add-author/big-small-table']);
echo $form->field($model, 'small');
echo $form->field($model, 'big')->hiddenInput(['value' => 'big'])->label(false);
echo $form->field($model, 'table')->hiddenInput(['value' => 'table'])->label(false);
echo Html::submitButton('в big-small-table');
ActiveForm::end();
?>
