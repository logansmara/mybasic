<?php
use yii\helpers\Html;
$this->title = 'Добавление статьи';
$this->params['breadcrumbs'][] = ['label' => 'Админка', 'url' => ['/admin']];
$this->params['breadcrumbs'][] = ['label' => 'KsyushaDelaets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ksyusha-delaet-create">
    <h1 style="font-size: 28px;margin: 15px 0;"><?= Html::encode($this->title) ?></h1>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>

