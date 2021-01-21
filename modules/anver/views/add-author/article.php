<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>
<h1 style="font-size: 28px;margin-bottom: 10px;">anver/item-article</h1>
<span style="font-size: 32px;color: red;">9</span>
<hr>
<?php
$filename = '../views/' . $small . '/article.php';
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
use yii\helpers\HtmlPurifier;
use yii\helpers\Html;
use app\models\General;
use yii\widgets\ListView;
use yii\data\ActiveDataProvider;

\$dataProvider = new ActiveDataProvider([
    'query' => $big::find()->where(['moderator' => '1'])->orderBy(['id'=>SORT_DESC]),
    'pagination' => [
        'pageSize' => 9,
    ],
]);
?>
<?php
\$this->registerCssFile('@web/css/article.css');
?>
<div class=\"row article\">
<div class=\"col-sm-1\"></div>
<div class=\"col-sm-9\">
<h1><?= Html::encode(\$article->title); ?></h1>

<?php
/* Очистка HTML от любого вредоносного кода */
\$text = HtmlPurifier::process(\$article->text);
\$text = str_replace(\"&lt;iframe\", \"<iframe\", \$text);
\$text = str_replace(\"allowfullscreen&gt;&lt;/iframe&gt;\", \"allowfullscreen></iframe>\", \$text);
?>
<?= \$text; ?>	
	
</div>
</div>
<hr style=\"border: 1px solid #ccc;background-color: #ddd\">
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
$form = ActiveForm::begin(['action' => 'indeks']);
echo $form->field($model, 'big');
echo $form->field($model, 'small');
echo $form->field($model, 'table');
echo Html::submitButton('в indeks');
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
