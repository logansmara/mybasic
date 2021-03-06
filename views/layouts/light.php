<?php
use app\widgets\Alert;
use yii\helpers\Html;
//use yii\bootstrap\Nav;
//use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;
//rmrevin\yii\fontawesome\CdnFreeAssetBundle::register($this);
AppAsset::register($this);
?>
<?php
use app\models\Category;
$categories = Category::find()->orderBy('number ASC')->all();
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
<style>
  a {
    text-decoration: none !important;
    outline: none !important;
  } 
</style>
</head>
<body>
<?php $this->beginBody() ?>

<!-- Верхнее темное меню -->
<div id="div-bar">
<div class="container">
<ul id="bar">
  <li><a href="<?= Url::home(); ?>" class="home">Owl Space</a></li>
  <li><a href="<?= Url::to(['/site/authors']); ?>">Авторы</a></li>
<!--
  <li><a href="/scroll-pager/index">scroll-pager</a></li>
  <li><a href="#">Интернет-магазин</a></li>
-->
  <li class="menu menu-click">
    <a href="#" class="button" id="vk1">Группы VK <span></span></a>
  </li>
  <li><a href="<?= Url::to(['site/contacts']); ?>">Контакты</a></li>
  <li>    <!-- Кнопка Поиск в мобильном меню -->
<a href="#" class="search1" style="float: left;">
<svg version="1.1" viewBox="0 0 23 24" class="svg-icon svg-fill" style="width:24px;height:24px;">
<path fill="#fff" stroke="none" pid="0" d="M13.5 0a9.5 9.5 0 0 0-7.605 15.176L0 21.072l2.121 2.12 5.922-5.922A9.5 9.5 0 0 0 13.5 19a9.5 9.5 0 0 0 0-19zm0 2a7.5 7.5 0 0 1 0 15 7.5 7.5 0 0 1 0-15z"></path>
</svg>
</a><!-- /class="search1" --></li>
</ul>
</div><!-- class="container" -->
</div><!-- id="div-bar" -->
   <!-- Все div закрыты -->
<div class="submenu">
<div class="close1"></div>
<ul class="submenu-ul">
<?php if(isset($categories)): ?>
<?php foreach ($categories as $category): ?>
<?php if(count($category->groups) > 0): ?>
<li>
<a href="<?= \yii\helpers\Url::to(['vkontakte/category', 'id' => $category->id]) ?>" class="<?= $category->icon ?>"><?= $category->name ?>
<span class="count1">
(<?= $count1 = count($category->groups)?>)
</span>
</a>
</li>
<?php endif; ?>
<?php endforeach; ?>
<?php endif; ?>
    </ul>
</div><!-- class="submenu" -->
<!-- /Верхнее темное меню -->
   <!-- Все div закрыты -->

<!-- меню для мобильного экрана -->
<div id="menu-mobile">
<!-- style="outline:0 none", чтобы убрать обводку -->
<div style="overflow: hidden;">
    <button class="hamburger hamburger--collapse js-click-knopka-mobile" type="button" aria-label="Открыть мобильное меню" style="outline:0 none;float: right;">
    <span class="hamburger-box">
    <span class="hamburger-inner"></span>
    </span>
    </button>
    <!-- Кнопка Поиск в мобильном меню -->
<a href="#" class="search1" style="float: left;">
<svg version="1.1" viewBox="0 0 23 24" class="svg-icon svg-fill" style="width:24px;height:24px;">
<path fill="#fff" stroke="none" pid="0" d="M13.5 0a9.5 9.5 0 0 0-7.605 15.176L0 21.072l2.121 2.12 5.922-5.922A9.5 9.5 0 0 0 13.5 19a9.5 9.5 0 0 0 0-19zm0 2a7.5 7.5 0 0 1 0 15 7.5 7.5 0 0 1 0-15z"></path>
</svg>
</a><!-- /class="search1" -->
<a href="<?= Url::home(); ?>" class="mobile-shapka-home">owl-space.ru</a>
</div><!-- style="overflow: hidden;" -->
<ul class="submenu-ul-mobile">
<li><a href="<?= Url::home(); ?>">Главная</a></li>
<li><a href="<?= Url::to(['/site/authors']); ?>">Авторы</a></li>
<li><a href="<?= Url::to(['/category/index']); ?>" class="button">Группы <i class="fa fa-vk" aria-hidden="true"></i></a>
	<ul class="ul-category">
<?php if(isset($categories)): ?>
<?php foreach ($categories as $category): ?>
<li>
<a href="<?= \yii\helpers\Url::to(['vkontakte/category', 'id' => $category->id]) ?>"><?= $category->name ?>
<span class="count1">
(<?= $count1 = count($category->groups)?>)
</span>
</a>
</li>
<?php endforeach; ?>
<?php endif; ?>
	</ul><!-- class="ul-category" -->
	</li>
<li><a href="<?= Url::to(['/site/contacts']); ?>">Контакты</a></li>
</ul><!-- class="submenu-ul-mobile" -->
</div><!-- id="menu-mobile" -->
<!-- /меню для мобильного экрана -->
   <!-- Все div закрыты -->



<div class="container main-vertical-color" style="margin-top: 60px;">
  

<?= $content; ?>		

</div><!-- /class="container" -->
   <!-- Все div закрыты -->

<!-- Яндекс поиск по сайту -->
<div class="yandex-search-fixed">
<div style="overflow: hidden;">
<div class="close-search"><span></span></div>
</div>
<div class="container">
<div class="ya-site-form ya-site-form_inited_no" data-bem="{&quot;action&quot;:&quot;http://owl-space.ru/vkontakte/search&quot;,&quot;arrow&quot;:false,&quot;bg&quot;:&quot;transparent&quot;,&quot;fontsize&quot;:12,&quot;fg&quot;:&quot;#000000&quot;,&quot;language&quot;:&quot;ru&quot;,&quot;logo&quot;:&quot;rb&quot;,&quot;publicname&quot;:&quot;Поиск по owl-space.ru&quot;,&quot;suggest&quot;:true,&quot;target&quot;:&quot;_self&quot;,&quot;tld&quot;:&quot;ru&quot;,&quot;type&quot;:2,&quot;usebigdictionary&quot;:true,&quot;searchid&quot;:2411714,&quot;input_fg&quot;:&quot;#000000&quot;,&quot;input_bg&quot;:&quot;#ffffff&quot;,&quot;input_fontStyle&quot;:&quot;normal&quot;,&quot;input_fontWeight&quot;:&quot;normal&quot;,&quot;input_placeholder&quot;:null,&quot;input_placeholderColor&quot;:&quot;#000000&quot;,&quot;input_borderColor&quot;:&quot;#7f9db9&quot;}"><form action="https://yandex.ru/search/site/" method="get" target="_self" accept-charset="utf-8"><input type="hidden" name="searchid" value="2411714"/><input type="hidden" name="l10n" value="ru"/><input type="hidden" name="reqenc" value=""/><input type="search" name="text" value=""/><input type="submit" value="Найти"/></form></div><style type="text/css">.ya-page_js_yes .ya-site-form_inited_no { display: none; }</style><script type="text/javascript">(function(w,d,c){var s=d.createElement('script'),h=d.getElementsByTagName('script')[0],e=d.documentElement;if((' '+e.className+' ').indexOf(' ya-page_js_yes ')===-1){e.className+=' ya-page_js_yes';}s.type='text/javascript';s.async=true;s.charset='utf-8';s.src=(d.location.protocol==='https:'?'https:':'http:')+'//site.yandex.net/v2.0/js/all.js';h.parentNode.insertBefore(s,h);(w[c]||(w[c]=[])).push(function(){Ya.Site.Form.init()})})(window,document,'yandex_site_callbacks');</script>
</div><!-- class="container" -->

</div><!-- class="yandex-search-fixed" -->
<!-- /Яндекс поиск по сайту -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
