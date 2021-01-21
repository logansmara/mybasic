<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<?php
$this->registerCssFile('@web/css/category.css');
$this->title = $category->name;
//$this->params['breadcrumbs'][] = ['label' => 'Посты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="row" style="min-height: 90vh; padding-bottom: 50px;">
<!-- левый блок -->
<div class="col-sm-1"></div>
<div class="col-sm-10">
<?php if(!empty($groups)): ?>
<div class="vk-groups">
<h1 class="h1-vk-groups"><?= Html::encode($category->name); ?></h1>
<?php foreach ($groups as $group): ?>
<a href="<?= Html::encode($group->url); ?>" target="blank" class="vk-group-a">
<?php if(!empty($group->img)): ?>
<img src="/images/avatars/<?= Html::encode($group->img) ?>.jpg" style="margin-right: 20px;">
<?php else: ?>
<img src="/images/avatars/no-image.png" style="margin-right: 20px;">
<?php endif; ?>
<p class="vk-group-p">
<?= Html::encode($group->title); ?>
<br>
<?php
$groupurl = Html::encode($group->url);
$url = substr($groupurl, 8);
?>
<span><?= $url; ?></span>
<?php //echo $group->id; ?>
</p>
</a>
<?php endforeach; ?>
</div>
<?= LinkPager::widget(['pagination' => $pagination]); ?>
<?php else: ?>
	<h3>В этой категории группы еще не представлены</h3>
<?php endif; ?>

</div>
<!-- правый блок -->
<div class="col-sm-1"></div>
</div>
