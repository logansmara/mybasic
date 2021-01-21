<?php
use app\models\authors\Shablon4;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;

$dataProvider = new ActiveDataProvider([
    'query' => Shablon4::find()->where(['moderator' => '1']),
    'pagination' => [
        'pageSize' => 9,
    ],
]);
?>
<div class="row index-blocks1">
<?= ListView::widget([
     'dataProvider' => $dataProvider,
     'itemOptions' => ['class' => 'item col-sm-4'],
     'itemView' => '_item_author',
     'pager' => ['class' => \kop\y2sp\ScrollPager::className()]
]);
?>
</div>

