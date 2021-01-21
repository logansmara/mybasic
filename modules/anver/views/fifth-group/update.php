<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FifthGroup */

$this->title = 'Update Fifth Group: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Fifth Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="fifth-group-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
