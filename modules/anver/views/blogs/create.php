<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Blogs */

$this->title = 'Create Blogs';
$this->params['breadcrumbs'][] = ['label' => 'Blogs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="blogs-create">

    <h1><?= Html::encode($this->title) ?></h1>
<?php
use app\models\Blogs;
$countblog = Blogs::find()->count();
?>
<hr>
<span>Number = <?= $countblog + 1 ?></span>
<hr>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
