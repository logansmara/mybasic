<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>
<h1 style="font-size: 28px;margin-bottom: 10px;">anver/indeks</h1>
<span style="font-size: 32px;color: red;">10</span>
<hr>
<?php
$filename = '../views/' . $small . '/index.php';
?>
<?php if (file_exists($filename)): ?>
Файл <?= $filename; ?> <span style="color: red;">уже существует!</span>
<hr>
<?php else: ?>
<?php
$myfile = fopen($filename, "w") or die("Не удается открыть файл!");
$txt =
"<?php
use app\models\authors\\$big;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;

\$dataProvider = new ActiveDataProvider([
    'query' => $big::find()->where(['moderator' => '1']),
    'pagination' => [
        'pageSize' => 9,
    ],
]);
?>
<div class=\"row index-blocks1\">
<?= ListView::widget([
     'dataProvider' => \$dataProvider,
     'itemOptions' => ['class' => 'item col-sm-4'],
     'itemView' => '_item_author',
     'pager' => ['class' => \kop\y2sp\ScrollPager::className()]
]);
?>
</div>

";
fwrite($myfile, $txt);
fclose($myfile);
?>
<?php endif; ?>
<?php
$form = ActiveForm::begin(['action' => 'moderator']);
echo $form->field($model, 'big');
echo $form->field($model, 'small');
echo $form->field($model, 'table');
echo Html::submitButton('в moderator');
ActiveForm::end();
?>
<br>
<?php
$dir = '../views/' . $small;
$files1 = scandir($dir);
echo "<pre>";
print_r($files1);
echo "</pre>";
?>
<div style="width: 100%; height: 50px;"></div>
