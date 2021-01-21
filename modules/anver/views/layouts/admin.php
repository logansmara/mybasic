<?php
/* @var $this \yii\web\View */
/* @var $content string */
use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;
rmrevin\yii\fontawesome\CdnFreeAssetBundle::register($this);
AppAsset::register($this);
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

<div class="wrap container">


<!-- только я -->
<?php if(Yii::$app->user->identity->username == 'anver1'):?>
<ul class="nav nav-tabs">
    <li><a href="<?= Url::to(['/']); ?>" target="_blank">Сайт</a></li>
    <li><a href="<?= Url::to(['/anver']); ?>">Главная</a></li>
        <li><a href="<?= Url::to(['/site/logout']); ?>">site/logout</a></li>
    <li><a href="<?= Url::to(['/anver/groups']); ?>">groups</a>
    </li>
    <li><a href="<?= Url::to(['/anver/rubrika']); ?>">Рубрики</a>
    </li>
    <li><a href="<?= Url::to(['/anver/double-add-group']); ?>">double-add-group</a>
    </li>
    <li><a href="<?= Url::to(['/anver/fifth-group']); ?>">fifth-group</a>
    </li>
    <li><a href="<?= Url::to(['/anver/blogs']); ?>">blogs</a>
    </li>
    <li><a href="<?= Url::to(['/anver/general']); ?>">general</a>
    </li>
    <li><a href="<?= Url::to(['/anver/add-author']); ?>">Добавить автора</a>
    </li>
    <li><a href="<?= Url::to(['/anver/delete-author']); ?>">Удалить автора</a>
    </li>
    <li><a href="<?= Url::to(['/anver/authors']); ?>">authors</a>
    </li>
    <li><a href="<?= Url::to(['/anver/check-authors']); ?>">check-authors</a>
    </li>
    <li><a href="<?= Url::to(['/anver/check-authors-all']); ?>">check-authors-all</a>
    </li>
    <li><a href="<?= Url::to(['/anver/check-views']); ?>">check-views</a>
    </li>
    <li><a href="<?= Url::to(['/anver/check-all']); ?>">check-all</a>
    </li>
    <li><a href="<?= Url::to(['/anver/require']); ?>">require</a>
    </li>
</ul>
<div style="clear: both;width: 100%;height: 1px;"></div>
<?php else: ?>
<a href="/site/logout" style="display: block;margin: 50px;">Выйти</a>
<?php endif; ?>

    <div class="container" style="min-height: 85vh;">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>

        <?= $content ?>
    </div>
</div>

<footer class="footer" style="background: #ccc; padding: 20px 0;">
    <div class="container">
        <p class="pull-left">&copy; Админка <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
