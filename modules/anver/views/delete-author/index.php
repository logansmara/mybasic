<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>
<h1 style="font-size: 28px;margin-bottom: 10px;">DeleteAuthor/Index</h1>
<span style="font-size: 32px;color: red;">1</span>
<hr>
<p style="margin-bottom: 15px;">
Папку web/images/authors/$small и экспортированный файл из базы данных $tablt.sql не удаляем, а отправляем в архив.
</p>
<?php
$form = ActiveForm::begin(['action' => '/anver/delete-author/big-small-table']);
echo $form->field($model, 'small');
echo $form->field($model, 'big')->hiddenInput(['value' => 'big'])->label(false);
echo $form->field($model, 'table')->hiddenInput(['value' => 'table'])->label(false);
echo Html::submitButton('в big-small-table');
ActiveForm::end();
?>
