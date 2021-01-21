<?php
use yii\helpers\Html;
?>
<div class="container">
<h1>vkontakte/view</h1>
<?php if(isset($groups)): ?>
<?php foreach ($groups as $group): ?>
<?php if(!empty($group->img)): ?>
<img src="/images/avatars/<?= Html::encode($group->img) ?>.jpg" style="margin-right: 20px;">
<?php else: ?>
<img src="/images/avatars/no-image.png" style="margin-right: 20px;">
<?php endif; ?>
<a href="<?= Html::encode($group->url); ?>" target="_blank" style="
color: #4682B4;font-size: 18px;
">
<?= Html::encode($group->title); ?> - <?= Html::encode($group->id); ?> (<?= Html::encode($group->category_id); ?>) | <?= Html::encode($group->url); ?>
<br>
</a>
<hr>
<?php endforeach; ?>
<?php endif; ?>
</div>
