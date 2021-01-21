<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Generals';
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- я -->
<?php if(Yii::$app->user->identity->username == 'anver1'):?>
<div class="general-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create General', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'login',
            'title',
            'moderator',
            'description',
            'text:ntext',
            //'img_small',
            //'rubrika',
            //'data',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
<?php endif; ?>
