<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Authors';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="authors-index">

    <h1><?= Html::encode($this->title) ?></h1>
<p style="margin: 10px 0;">
<?php
if(!empty($smallcreate)) {
    echo "Добавить - " . $smallcreate;
}
if(!empty($smalldelete)) {
    echo "Удалить - " . $smalldelete;
}
?>
</p>
    <p>
        <?= Html::a('Create Authors', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'login',
            'name',
            'surname',
            'profession',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
