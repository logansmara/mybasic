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
</head>
<body>
<?php $this->beginBody() ?>

<!-- затемнение страницы при открытии бокового меню -->
<div class="submenu-vertical-fixed"></div>
   <!-- Все div закрыты -->
   
<!-- Верхнее темное меню -->
<div id="div-bar">
<div class="container">
<ul id="bar">
  <li><a href="<?= Url::home(); ?>">Главная</a></li>
  <li><a href="<?= Url::to(['vkontakte/video']); ?>">Видео</a></li>
  <li><a href="<?= Url::to(['vkontakte/articles']); ?>">Статьи</a></li>
  <li><a href="/scroll-pager/index">scroll-pager</a></li>
  <li><a href="#">Интернет-магазин</a></li>
  <li class="menu menu-click">
    <a href="#" class="button" id="vk1">Группы VK <span></span></a>
  </li>
</ul>
</div><!-- class="container" -->
</div><!-- id="div-bar" -->
   <!-- Все div закрыты -->
<div class="submenu">
<div class="close1"></div>
<ul class="submenu-ul">
<?php if(isset($categories)): ?>
<?php foreach ($categories as $category): ?>
<?php if(count($category->addgroup) > 0): ?>
<li>
<a href="<?= \yii\helpers\Url::to(['vkontakte/category', 'id' => $category->id]) ?>" class="<?= $category->icon ?>"><?= $category->name ?>
<span class="count1">
(<?= $count1 = count($category->addgroup)?>)
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
<a href="#" class="search1">
<svg version="1.1" viewBox="0 0 23 24" class="svg-icon svg-fill" style="width:24px;height:24px;">
<path fill="#fff" stroke="none" pid="0" d="M13.5 0a9.5 9.5 0 0 0-7.605 15.176L0 21.072l2.121 2.12 5.922-5.922A9.5 9.5 0 0 0 13.5 19a9.5 9.5 0 0 0 0-19zm0 2a7.5 7.5 0 0 1 0 15 7.5 7.5 0 0 1 0-15z"></path>
</svg>
</a><!-- /class="search1" -->
</div><!-- style="overflow: hidden;" -->
<ul class="submenu-ul-mobile">
	<li><a href="<?= Url::home(); ?>">Главная</a></li>
	<li><a href="<?= Url::to(['vkontakte/video']); ?>">Видео</a></li>
    <li><a href="<?= Url::to(['vkontakte/articles']); ?>">Статьи</a></li>
	<li><a href="<?= Url::to(['/category/index']); ?>" class="button">Группы <i class="fa fa-vk" aria-hidden="true"></i></a>
	<ul class="ul-category">
<?php if(isset($categories)): ?>
<?php foreach ($categories as $category): ?>
<li>
<a href="<?= \yii\helpers\Url::to(['vkontakte/category', 'id' => $category->id]) ?>"><?= $category->name ?>
<span class="count1">
(<?= $count1 = count($category->addgroup)?>)
</span>
</a>
</li>
<?php endforeach; ?>
<?php endif; ?>
	</ul><!-- class="ul-category" -->
	</li>
</ul><!-- class="submenu-ul-mobile" -->
</div><!-- id="menu-mobile" -->
<!-- /меню для мобильного экрана -->
   <!-- Все div закрыты -->

<!-- Фиксированное меню -->
<div class="fixed-menu">
<div class="container container-fixed">
<div class="row">
<!-- боковое меню -->
<div class="absolut-vertical">
<div id="main-vertical"  style="position: relative;">
<div class="knopka-menu knopka-vertical">
<a class="js-click-knopka-vertical" type="button" aria-label="Открыть мобильное меню">
<svg version="1.1" viewBox="0 0 24 16" class="menu-icon svg-icon svg-fill" style="width:20px;height:20px;">
<path fill="#282828" stroke="none" pid="0" d="M0 0h24v2H0V0zm0 7h24v2H0V7zm0 7h24v2H0v-2z" _fill="#221F20" fill-rule="evenodd"></path>
</svg>
</a>
</div><!-- /class="knopka-vertical" -->
<div class="knopka-menu knopka-vertical">
<!-- кнопка поиск в боковом меню -->
<a href="#" class="search1">
<svg version="1.1" viewBox="0 0 23 24" class="svg-icon svg-fill" style="width:20px;height:20px;">
<path fill="#282828" stroke="none" pid="0" d="M13.5 0a9.5 9.5 0 0 0-7.605 15.176L0 21.072l2.121 2.12 5.922-5.922A9.5 9.5 0 0 0 13.5 19a9.5 9.5 0 0 0 0-19zm0 2a7.5 7.5 0 0 1 0 15 7.5 7.5 0 0 1 0-15z"></path>
</svg>
</a><!-- /class="search1" -->
</div><!-- /class="knopka-vertical" -->
<div class="knopka-menu knopka-vertical">
<a href="#" class="vk1"><span></span></a>
</div>
  <div class="submenu-vertical-ul">
    <div class="close2"><span></span></div>
    <ul class="submenu-vertical-ul-first">
  <li><a href="<?= Url::home(); ?>">Главная</a></li>
  <li><a href="#">МЕНЕДЖМЕНТ</a></li>
  <li><a href="#">ЛИДЕРСТВО</a></li>
  <li><a href="#">БИЗНЕС И ОБЩЕСТВО</a></li>
  <li><a href="#">КАРЬЕРА</a></li>
  <li><a href="#">ИННОВАЦИИ</a></li>
  <li><a href="#">МАРКЕТИНГ</a></li>
    </ul>
    <ul class="submenu-vertical-ul-second">
  <li><a href="#">Подписка</a></li>
  <li><a href="#">Новый номер</a></li>
  <li><a href="#">Архив</a></li>
  <li><a href="#">Видео</a></li>
  <li><a href="#">Мероприятия</a></li>
  <li><a href="#">Вход</a></li>
  </ul>
  <div style="padding: 15px 0 25px 25px;line-height: 1.8;">
  Qwerty 1<br>
  Qwerty 2<br>
  Qwerty 3<br>
  Qwerty 4<br>
  Qwerty 5<br>
  </div>
  </div><!-- class="submenu-vertical submenu-vertical-ul" -->

</div><!-- id="main-vertical" -->
</div><!-- class="absolut-vertical" -->
<!-- /боковое меню -->
<div class="container"> 
<div class="row">
<div class="col-sm-12">
<div class="right1 second-menu-desctop" style="padding-bottom: 0;">
  <div class="row">
    <div class="col-sm-2">
      <a href="<?= Url::home(); ?>" class="second-menu-left">
        Логотип
        <br>
        название
        <br>
        сайта
      </a>
    </div><!-- /class="col-sm-2" -->
    <div class="col-sm-10">
      <ul class="second-menu-right-ul second-menu-right-ul-1">
        <li><a href="#">Подписка</a></li>
        <li><a href="#">Новый номер</a></li>
        <li><a href="#">Архив</a></li>
        <li><a href="#">Видео</a></li>
        <li><a href="#">Мероприятия</a></li>
        <li><a href="#">Вход</a></li>
      </ul>
      <div style="clear: both;"></div>
      <ul class="second-menu-right-ul second-menu-right-ul-2">
        <li><a href="#">МЕНЕДЖМЕНТ</a></li>
        <li><a href="#">ЛИДЕРСТВО</a></li>
        <li><a href="#">БИЗНЕС И ОБЩЕСТВО</a></li>
        <li><a href="#">КАРЬЕРА</a></li>
        <li><a href="#">ИННОВАЦИИ</a></li>
        <li><a href="#">МАРКЕТИНГ</a></li>
      </ul>
    </div><!-- /class="col-sm-10" -->

      <div style="border-bottom: 1px solid #ccc;height: 10px;clear: both;margin: 0 23px;"></div>

  </div><!-- /class="row" -->
</div><!-- class="right1 second-menu-desctop" -->
</div>
</div>
</div>
</div><!-- /class="row" -->
</div><!-- /class="container container-fixed" -->
</div><!-- /class="fixed-menu" -->
<!-- /Фиксированное меню -->


<div class="container main-vertical-color"> 
<div class="row">
<div class="col-sm-12">
<div class="content-q">

    <!-- хлебные крошки -->
    <div class="breadcrumbs1">
  <?= Breadcrumbs::widget([
        'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
  ]) ?>
  <?= Alert::widget() ?>
    </div>
<!-- /хлебные крошки -->
<?= $content; ?>		
</div><!-- /class="content-q" -->
</div><!-- /class="col-sm-12" -->
</div><!-- /class="row" -->
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

<footer style="width: 100%;height: 80px;background-color: #333;">
	
</footer>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
