<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\FifthGroup */

$this->title = 'Create Fifth Group';
$this->params['breadcrumbs'][] = ['label' => 'Fifth Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fifth-group-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
