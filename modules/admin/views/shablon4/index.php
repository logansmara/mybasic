<?php
use yii\helpers\Html;
use yii\grid\GridView;
$this->title = 'Админка статей';
$this->params['breadcrumbs'][] = ['label' => 'Админка', 'url' => ['/admin']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!-- я и author1 -->
<?php if(Yii::$app->user->identity->username == 'anver1' || Yii::$app->user->identity->username == 'shablon4'):?>
<div class="shablon4-index">
    <h1 style="font-size: 28px;margin: 15px 0;"><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Добавить статью', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <p style="margin-top: 15px; border: 1px solid red; padding: 10px;">
        Если в колонке Moderator значение - 1, статья прошла модерацию
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'moderator',
            'id',
            'title',
            'description',
            'img_small',
            'text:ntext',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
<?php endif; ?>

