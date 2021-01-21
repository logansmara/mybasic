<?php
use yii\helpers\Html;
/* это нужно для хлебных крошек */
$category_name_params = $addgroup->category['name'];
$category_id_params = $addgroup->category_id;
$name_params = $addgroup->title;
?>
<?php
$this->registerCssFile('@web/css/view.css');
$this->title = $name_params;
$this->params['breadcrumbs'][] = ['label' => $category_name_params, 'url' => ['vkontakte/category', 'id' => $category_id_params]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
<?php if(isset($addgroup)): ?>
<h3><?= Html::encode($addgroup->title); ?></h3>
<p><?= Html::encode($addgroup->description); ?></p>
<a href="<?= Html::encode($addgroup->url); ?>" target="_blank">ВКонтакте</a>
<?php endif; ?>
</div>
