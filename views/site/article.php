<?php
/* для HtmlPurifier::process($article->text) */
use yii\helpers\HtmlPurifier;
use yii\helpers\Html;
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
<?php
$this->registerCssFile('@web/css/article.css');
?>
<div class="row article">
<div class="col-sm-1"></div>
<div class="col-sm-9">
<h1><?= Html::encode($article->title); ?></h1>
<a href="/<?= Html::encode($article->login); ?>">Автор</a>
<?php
/* Очистка HTML от любого вредоносного кода */
$text = HtmlPurifier::process($article->text);
$text = str_replace("&lt;iframe", "<iframe", $text);
$text = str_replace("allowfullscreen&gt;&lt;/iframe&gt;", "allowfullscreen></iframe>", $text);
?>
<?= $text; ?>	
	
</div>
</div>
<hr style="border: 1px solid #ccc;background-color: #ddd">
<div class="row index-blocks1">
<?= ListView::widget([
     'dataProvider' => $dataProvider,
     'itemOptions' => ['class' => 'item col-sm-4'],
     'itemView' => '_item_index',
     'pager' => ['class' => \kop\y2sp\ScrollPager::className()]
]);
?>
</div>

