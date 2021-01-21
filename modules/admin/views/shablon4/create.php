<?php
use yii\helpers\Html;
$this->title = 'Добавление статьи';
$this->params['breadcrumbs'][] = ['label' => 'Админка', 'url' => ['/admin']];
$this->params['breadcrumbs'][] = ['label' => 'Shablon4s', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shablon4-create">
    <h1 style="font-size: 28px;margin: 15px 0;"><?= Html::encode($this->title) ?></h1>
    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
</div>

