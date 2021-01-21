<?php
use yii\helpers\Url;
use yii\helpers\Html;
/**/
use app\models\Blogs;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;

$dataProvider = new ActiveDataProvider([
    'query' => Blogs::find()->orderBy(['number'=>SORT_DESC]),
    'pagination' => [
        'pageSize' => 12,
    ],
]);
?>
<p style="margin: 10px;font-family: SansitaSwashed-Light;font-size: 20px;"><em>На сайте представленные видео и группы ВКонтакте из Самары</em></p>
<!-- Серая полоса -->
<div class="polosa"></div>
<div class="row index-blocks1">

<?= ListView::widget([
     'dataProvider' => $dataProvider,
     'itemOptions' => ['class' => 'item col-sm-4'],
     'itemView' => '_item_index',
     'pager' => ['class' => \kop\y2sp\ScrollPager::className()]
]);
?>

</div><!-- /class="row" -->

<!-- Footer -->
<div style="width: 100%;height: 30px;"></div>
