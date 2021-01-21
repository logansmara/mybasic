<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>
<hr>
<?php echo Yii::$app->getSecurity()->generatePasswordHash('fle7rh3g') . ' (логин: anver1 -- пароль: fle7rh3g)'; ?>
<br>
<?php echo Yii::$app->getSecurity()->generatePasswordHash('shablon1') . ' (логин: shablon -- пароль: shablon1)'; ?>
<br>
<?php echo Yii::$app->getSecurity()->generatePasswordHash('shablon44') . ' (логин: shablon4 -- пароль: shablon44)'; ?>
<br>
<?php echo Yii::$app->getSecurity()->generatePasswordHash('shablon55') . ' (логин: shablon5 -- пароль: shablon55)'; ?>
<br>
<?php echo Yii::$app->getSecurity()->generatePasswordHash('qwerty11') . ' (логин: qwerty -- пароль: qwerty11)'; ?>
<br>
<?php echo Yii::$app->getSecurity()->generatePasswordHash('ksyusha-delaet1') . ' (логин: ksyusha-delaet -- пароль: ksyusha-delaet1)'; ?>
    <hr>
    <p>Please fill out the following fields to login:</p>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'layout' => 'horizontal',
        'fieldConfig' => [
            'template' => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>",
            'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
    ]); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        <?= $form->field($model, 'rememberMe')->checkbox([
            'template' => "<div class=\"col-lg-offset-1 col-lg-3\">{input} {label}</div>\n<div class=\"col-lg-8\">{error}</div>",
        ]) ?>

        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
                <?= Html::submitButton('Login', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>

    <?php ActiveForm::end(); ?>

    <div class="col-lg-offset-1" style="color:#999;">
        You may login with <strong>admin/admin</strong> or <strong>demo/demo</strong>.<br>
        To modify the username/password, please check out the code <code>app\models\User::$users</code>.
    </div>
</div>
