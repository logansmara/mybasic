<?php
use yii\helpers\Url;
use yii\helpers\Html;
/**/
use app\models\Blogs;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;

$dataProvider = new ActiveDataProvider([
    'query' => Blogs::find()
    ->where('category=:category', [':category' => 'article'])->orderBy(['number'=>SORT_DESC]),
    'pagination' => [
        'pageSize' => 3,
    ],
]);
?>
<!-- Серый блок -->
<div class="row index-blocks1">

<?= ListView::widget([
     'dataProvider' => $dataProvider,
     'itemOptions' => ['class' => 'item col-sm-4'],
     'itemView' => '_item_articles',
     'pager' => ['class' => \kop\y2sp\ScrollPager::className()]
]);
?>

</div><!-- /class="row" -->
