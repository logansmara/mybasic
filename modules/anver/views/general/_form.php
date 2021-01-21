<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\General */
/* @var $form yii\widgets\ActiveForm */
?>
<!-- я -->
<?php if(Yii::$app->user->identity->username == 'anver1'):?>
<div class="general-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'login')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'moderator')->textInput() ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'img_small')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'rubrika')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
<?php endif; ?>
