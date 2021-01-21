<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>
<h1 style="font-size: 28px;margin-bottom: 10px;">anver/modules-vievv-indeks</h1>
<span style="font-size: 32px;color: red;">19</span>
<hr>
<?php
$filename = '../modules/admin/views/' . $small . '/index.php';
?>
<?php if (file_exists($filename)): ?>
Файл <?= $filename; ?> <span style="color: red;">уже существует!</span>
<hr>
<?php else: ?>
<?php
$myfile = fopen($filename, "w") or die("Не удается открыть файл!");
$txt =
"<?php
use yii\helpers\Html;
use yii\grid\GridView;
\$this->title = 'Админка статей';
\$this->params['breadcrumbs'][] = ['label' => 'Админка', 'url' => ['/admin']];
\$this->params['breadcrumbs'][] = \$this->title;
?>
<!-- я и author1 -->
<?php if(Yii::\$app->user->identity->username == 'anver1' || Yii::\$app->user->identity->username == '$small'):?>
<div class=\"$small-index\">
    <h1 style=\"font-size: 28px;margin: 15px 0;\"><?= Html::encode(\$this->title) ?></h1>
    <p>
        <?= Html::a('Добавить статью', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <p style=\"margin-top: 15px; border: 1px solid red; padding: 10px;\">
        Если в колонке Moderator значение - 1, статья прошла модерацию
    </p>
    <?= GridView::widget([
        'dataProvider' => \$dataProvider,
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

";
fwrite($myfile, $txt);
fclose($myfile);
?>
<?php endif; ?>
<?php
$form = ActiveForm::begin(['action' => 'modules-vievv-update']);
echo $form->field($model, 'big');
echo $form->field($model, 'small');
echo $form->field($model, 'table');
echo Html::submitButton('в modules-vievv-update');
ActiveForm::end();
?>
<br>
<?php
$dir = '../modules/admin/views/' . $small;
$files1 = scandir($dir);
echo "<pre>";
print_r($files1);
echo "</pre>";
?>
<div style="width: 100%;height: 100px"></div>