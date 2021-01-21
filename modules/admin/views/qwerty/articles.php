<!-- я и author -->
<?php if(Yii::$app->user->identity->username == 'anver1' || Yii::$app->user->identity->username == 'qwerty'):?>
<p style="border: 1px solid red; margin: 15px 0; padding: 10px;">
    Если статья красного цвета, значит она еще не прошла модерацию.
</p>
<?php foreach($articles as $article): ?>
<?php if($article->moderator == 0): ?>
<div style="color: red;">
<?php else: ?>
<div style="color: #444;">
<?php endif; ?>
<h2 style="font-size: 24px;"><?= $article->title; ?></h2>
<p><?= $article->description; ?></p>    
</div>
<?php endforeach; ?>
<?php endif; ?>

