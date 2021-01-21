<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<?php
$this->registerCssFile('@web/css/view.css');
$this->title = $category->name;
//$this->params['breadcrumbs'][] = ['label' => 'Посты', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="row" style="background-color: #f5f5f5;min-height: 90vh;">
<!-- левый блок -->
<div class="col-sm-1"></div>
<div class="col-sm-10 div-categories">
<?php if(!empty($categories)): ?>

<?php foreach ($categories as $category): ?>
<a href="<?= \yii\helpers\Url::to(['vkontakte/category', 'id' => $category->id]) ?>" class="a-categories <?= $category->icon ?>"><?= Html::encode($category->name) ?>
<span class="count1">
<?= $count1 = count($category->addgroup)?>
</span>
</a>
<br>
<?php endforeach; ?>

<?php endif; ?>

</div>
<!-- правый блок -->
<div class="col-sm-1"></div>

</div><!-- /class="row" -->