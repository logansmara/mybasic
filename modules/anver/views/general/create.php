<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\General */

$this->title = 'Create General';
$this->params['breadcrumbs'][] = ['label' => 'Generals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- я -->
<?php if(Yii::$app->user->identity->username == 'anver1'):?>
<div class="general-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
<?php endif; ?>
