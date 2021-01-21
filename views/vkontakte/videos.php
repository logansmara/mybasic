<?php
use yii\helpers\Url;
use yii\helpers\Html;
/**/
use app\models\Blogs;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;

$dataProvider = new ActiveDataProvider([
    'query' => Blogs::find()->where('category=:category', [':category' => 'video'])->orderBy(['number'=>SORT_DESC]),
    'pagination' => [
        'pageSize' => 9,
    ],
]);
?>

<!-- Серый блок -->
<div class="index-blocks1">
<div class="row">

<?= ListView::widget([
     'dataProvider' => $dataProvider,
     'itemOptions' => ['class' => 'item col-sm-4'],
     'itemView' => '_item_video',
     'pager' => ['class' => \kop\y2sp\ScrollPager::className()]
]);
?>

</div><!-- /class="row" -->
</div><!-- /class="index-blocks1" -->
