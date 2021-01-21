<?php
use yii\helpers\HtmlPurifier;
use app\models\Blogs;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;

$dataProvider = new ActiveDataProvider([
    'query' => Blogs::find()->orderBy(['number'=>SORT_DESC]),
    'pagination' => [
        'pageSize' => 9,
    ],
]);
?>
<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\LinkPager;
/* @var $this yii\web\View */
$this->title = $blog->title;
/*
if($blog->category == 'video') {
	$qw = 'Видео';
} elseif ($blog->category == 'articles') {
	$qw = 'Статьи';
} */ $qw = 'Видео';
$url = '/vkontakte/' . $blog->category;
$this->params['breadcrumbs'][] = ['label'=>$qw,'url'=>$url];
$this->params['breadcrumbs'][] = $this->title;
//$this->registerCssFile('css/blog.css', [ 'position' => \yii\web\View::POS_END ]);
?>
<div class="row <?= $blog->category; ?>">
<!-- левый блок -->
<div class="col-sm-1"></div>
<div class="col-sm-10">
<div  class="blog-block1">
<h1><?= Html::encode($blog->title); ?></h1>
<!-- Видео с ВКонтакте -->
<?php if($blog->category == 'video' && $blog->class != 'youtube'): ?>
<div class="thumb-wrap">
<iframe style="z-index: 9999" src="//vk.com/video_ext.php?oid=<?= $blog->url_video ?>" width="853" height="480" frameborder="0" allowfullscreen></iframe>
</div><!-- /class="thumb-wrap" -->
<?php endif; ?>
<!-- Адаптивное видео с YouTube
https://html5book.ru/adaptivnoe-video/ -->
<?php if($blog->category == 'video' && $blog->class == 'youtube'): ?>
<div class="thumb-wrap">
<iframe  style="z-index: 9999" width="716" height="403" src="https://www.youtube.com/embed/<?= $blog->url_video ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div><!-- /class="thumb-wrap" -->
<?php endif; ?>
<p class="p-blog-block1"><?= HtmlPurifier::process($blog->text); ?></p>
<!-- Put this script tag to the <head> of your page -->
<script type="text/javascript" src="https://vk.com/js/api/share.js?95" charset="windows-1251"></script>

<!-- Put this script tag to the place, where the Share button will be -->
<script type="text/javascript"><!--
document.write(VK.Share.button(false,{type: "round_nocount", text: "Сохранить"}));
--></script>
Группа в контакте - <a href="<?= $group['url']; ?>" target="_blank"><?= Html::encode($group['title']); ?></a>
</div><!-- /class="blog-block1" -->
</div><!-- /class="col-sm-10" -->
<div class="col-sm-1"></div>
</div><!-- /class="row" -->

<hr style="border: 1px solid #ccc;background-color: #ddd">

<div class="row index-blocks1">

<?= ListView::widget([
     'dataProvider' => $dataProvider,
     'itemOptions' => ['class' => 'item col-sm-4'],
     'itemView' => '_item_index',
     'pager' => ['class' => \kop\y2sp\ScrollPager::className()]
]);
?>

</div><!-- /class="row" -->
