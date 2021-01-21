<?php
use yii\helpers\Html;
?>
<div class="container">
<h1>Авторы</h1>
<?php if(isset($authors)): ?>
<?php foreach ($authors as $author): ?>

<a href="/<?= $author->login; ?>/index">
<?= Html::encode($author->name); ?> <?= Html::encode($author->surname); ?> (<?= Html::encode($author->profession); ?>)
<br>
</a>
<hr>
<?php endforeach; ?>
<?php endif; ?>
</div>
