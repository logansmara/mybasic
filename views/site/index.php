<?php
use app\models\General;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;

$dataProvider = new ActiveDataProvider([
    'query' => General::find()->orderBy(['id'=>SORT_DESC]),
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
