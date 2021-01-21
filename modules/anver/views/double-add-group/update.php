<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AddGroup */

$this->title = 'Update Add Group: ' . $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Add Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->title, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="add-group-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
