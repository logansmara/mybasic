<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AddGroup */
/* @var $form yii\widgets\ActiveForm */
?>

<p>
  Внимание!!! Нельзя передавать смайлики, выйдет ошибка
</p>

<div class="add-group-form">

    <?php $form = ActiveForm::begin(); ?>

    <?php //echo $form->field($model, 'category_id')->textInput() ?>

<div class="freelancers-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="form-group field-product-album_id has-success">
      <label class="control-label" for="product-album_id">Альбом</label>
      <select id="product-album_id" class="form-control" name="DoubleAddGroup[category_id]">
          <?= \app\components\MenuWidget::widget(['tpl' => 'select_product', 'model' => $model]) ?>
      </select>
    </div>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => '6','maxlength' => true]) ?>

    <?= $form->field($model, 'moderator')->textInput(['value' => 1]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
