<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>
<h1 style="font-size: 28px;margin-bottom: 10px;">anver/modules-vievv-vievv</h1>
<span style="font-size: 32px;color: red;">21</span>
<hr>
<?php
$filename = '../modules/admin/views/' . $small . '/view.php';
?>
<?php if (file_exists($filename)): ?>
Файл <?= $filename; ?> <span style="color: red;">уже существует!</span>
<hr>
<?php else: ?>
<?php
$s = 's';
$myfile = fopen($filename, "w") or die("Не удается открыть файл!");
$txt =
"<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
\$this->title = \$model->title;
\$this->params['breadcrumbs'][] = ['label' => 'Админка', 'url' => ['/admin']];
\$this->params['breadcrumbs'][] = ['label' => '$big$s', 'url' => ['index']];
\$this->params['breadcrumbs'][] = \$this->title;
\yii\web\YiiAsset::register(\$this);
?>
<!-- я и author1 -->
<?php if(Yii::\$app->user->identity->username == 'anver1' || Yii::\$app->user->identity->username == '$small'):?>
<div class=\"author1-view\">
<h1 style=\"font-size: 28px;margin: 15px 0;\"><?= Html::encode(\$this->title) ?></h1>
<?php if(\$model->moderator == 0): ?>
<p style=\"border: 1px solid red; padding: 10px; margin: 10px 0;\">
Статья появится на сайте после проверки модератором
</p>
<?php endif; ?>
    <p style=\"margin: 15px 0;\">
        <?= Html::a('Update', ['update', 'id' => \$model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => \$model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?= DetailView::widget([
        'model' => \$model,
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

";
fwrite($myfile, $txt);
fclose($myfile);
?>
<?php endif; ?>
<?php
$form = ActiveForm::begin(['action' => 'modules-small-images-model']);
echo $form->field($model, 'big');
echo $form->field($model, 'small');
echo $form->field($model, 'table');
echo Html::submitButton('в modules-small-images-model');
ActiveForm::end();
?>
<br>
<?php
$imagebig = 'SmallImage' . $big;
$filename = '../modules/admin/models/' . $imagebig . '.php';
?>
<?php if (file_exists($filename)): ?>
Файл <?= $filename; ?> <span style="color: red;">уже существует!</span>
<?php else: ?>
Файла <?= $filename; ?> <span style="color: color;">еще нет</span>
<?php endif; ?>

<div style="width: 100%;height: 100px"></div>