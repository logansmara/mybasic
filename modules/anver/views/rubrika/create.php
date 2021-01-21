<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Rubrika */

$this->title = 'Create Rubrika';
$this->params['breadcrumbs'][] = ['label' => 'Rubrikas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="rubrika-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
