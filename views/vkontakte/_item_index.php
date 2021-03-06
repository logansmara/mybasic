<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>
<!-- Обрезаем description -->
<?php
$description1 = Html::encode($model->description);
if(mb_strlen($description1) > 109 ) {
$description1 = mb_substr($description1, 0, 110);
$description1 = $description1 . '...';
}
?>

<?php // echo Html::encode($model->title) ?>    
<?php // echo HtmlPurifier::process($model->description) ?>
<div class="index-block1">
<!--
Если категория-видео, то ссылка на 'vkontakte/blog','id'=>$id
-->
<?php if(Html::encode($model->category) == 'video'): ?>
<a href="<?= Url::to(['vkontakte/blog', 'id' => Html::encode($model->id)]);?>" style="margin-bottom: 60px;">
<!--
Если категория-статья, то ссылка на статью из таблицы автора
например, ksyusha-delaet/article?id=1
-->
<?php elseif (Html::encode($model->category) == 'article'): ?>
<a href="/<?= Html::encode($model->url_video); ?>" style="margin-bottom: 60px;">
<?php else: ?>
<a href="<?= Url::to(['vkontakte/blog', 'id' => Html::encode($model->id)]);?>" style="margin-bottom: 60px;">
<?php endif; ?>

<?php
/*
https://vitalik.ws/zametki/78-nazvanie-mesyaca-data-na-russkom-yazyke-s-pomoshyu-php.html
https://www.php.net/manual/ru/function.date.php
*/
//текущая дата
$currentDate = Html::encode($model->data);
//список месяцев с названиями для замены
$_monthsList = array(
  "01" => "января",
  "02" => "февраля",
  "03" => "марта",
  "04" => "апреля",
  "05" => "мая",
  "06" => "июня",
  "07" => "июля",
  "08" => "августа",
  "09" => "сентября",
  "10" => "октября",
  "11" => "ноября",
  "12" => "декабря"
);
 
//Наша задача - вывод русской даты, 
//поэтому заменяем число месяца на название:
$_mD = date("m", strtotime($currentDate)); //для замены
$currentDate = str_replace($_mD, " ".$_monthsList[$_mD]." ", $currentDate);
 
//теперь в переменной $currentDate хранится дата в формате 12 марта 2015
?>
<p class="index-block1-data">
<span href="/vkontakte/<?= $blog->category ?>" class="">
<?php
if(Html::encode($model->category) == 'video') {
  echo "ВИДЕО";
} elseif (Html::encode($model->category) == 'article') {
  echo "СТАТЬЯ";
} else {
  echo "ПРОЧЕЕ";
}
?>
</span>
<span style="color: #ccc">|</span>
<span class=""><?= date("j", strtotime(Html::encode($model->data))); ?> <?= $_monthsList[$_mD] ?> <?= date("Y", strtotime(Html::encode($model->data))); ?></span></p>
<picture>
  <source srcset="/images/blogs/<?= Html::encode($model->img_small); ?>.webp" type="image/webp">
  <img data-src="/images/blogs/<?= Html::encode($model->img_small); ?>.jpg" style="width: 100%">
</picture>
<div class="index-block1-description-h4">
<?php
$h4 = Html::encode($model->title);
if(mb_strlen($h4) > 64) {
$h4 = mb_substr($h4, 0, 64);
$h4 = $h4 . '...';
}
?>
<h4><?= $h4; ?></h4>
<p><?= $description1; ?></p>
</div>
</a>
</div><!-- /class="index-block1" -->