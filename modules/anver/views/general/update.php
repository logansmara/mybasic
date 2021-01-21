<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\General */

$this->title = 'Update General: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Generals', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<!-- я -->
<?php if(Yii::$app->user->identity->username == 'anver1'):?>
<div class="general-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
<?php endif; ?>
