<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Double Add Groups';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="add-group-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Add Group', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'category_id',
            'url:url',
            'title',
            'description',
            //'moderator',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
