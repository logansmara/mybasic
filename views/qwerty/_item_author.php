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
<div class="index-block1">
<a href="<?= Url::to(['qwerty/article', 'id' => Html::encode($model->id)]);?>" style="margin-bottom: 60px;">
<?php
$currentDate = Html::encode($model->data);
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
$_mD = date("m", strtotime($currentDate));
$currentDate = str_replace($_mD, " ".$_monthsList[$_mD]." ", $currentDate);
?>
<p class="index-block1-data">
<span class="article">
Статья
</span>
<span style="color: #ccc">|</span>
<span><?= date("j", strtotime(Html::encode($model->data))); ?> <?= $_monthsList[$_mD] ?> <?= date("Y", strtotime(Html::encode($model->data))); ?></span></p>
<img src="/images/authors/smallqwerty/<?= trim(Html::encode($model->img_small)); ?>">
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
</div>

