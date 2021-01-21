<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AddGroup */

$this->title = 'Create Add Group';
$this->params['breadcrumbs'][] = ['label' => 'Double Add Groups', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="add-group-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
