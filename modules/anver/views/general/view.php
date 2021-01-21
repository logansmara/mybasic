<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\General */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Generals', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<!-- я -->
<?php if(Yii::$app->user->identity->username == 'anver1'):?>
<div class="general-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'moderator',
            'description',
            'text:ntext',
            'img_small',
            'rubrika',
            'data',
        ],
    ]) ?>

</div>
<?php endif; ?>
