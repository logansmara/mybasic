<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Админка', 'url' => ['/admin']];
$this->params['breadcrumbs'][] = ['label' => 'Qwertys', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<!-- я и author1 -->
<?php if(Yii::$app->user->identity->username == 'anver1' || Yii::$app->user->identity->username == 'qwerty'):?>
<div class="author1-view">
<h1 style="font-size: 28px;margin: 15px 0;"><?= Html::encode($this->title) ?></h1>
<?php if($model->moderator == 0): ?>
<p style="border: 1px solid red; padding: 10px; margin: 10px 0;">
Статья появится на сайте после проверки модератором
</p>
<?php endif; ?>
    <p style="margin: 15px 0;">
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'title',
            'description',
            'text:ntext',
            //'moderator',
        ],
    ]) ?>
</div>
<?php endif; ?>

