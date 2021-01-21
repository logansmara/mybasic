<?php

echo 'log';
?>

<?php if(!Yii::$app->user->isGuest): ?>
<a href="<?= \yii\helpers\Url::to(['/site/logout']) ?>"><i class="fa fa-user"></i> <?= Yii::$app->user->identity['username'] ?> (Выход)</a>
<?php endif; ?>