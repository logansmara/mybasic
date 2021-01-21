<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>
<h1 style="font-size: 28px;margin-bottom: 10px;">anver/item-index</h1>
<span style="font-size: 32px;color: red;">7</span>
<hr>
<?php
$filename = '../views/' . $small . '/_item_index.php';
?>
<?php if (file_exists($filename)): ?>
Файл <?= $filename; ?> <span style="color: red;">уже существует!</span>
<hr>
<?php else: ?>
<?php
$myfile = fopen($filename, "w") or die("Не удается открыть файл!");
$txt =
"<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\helpers\HtmlPurifier;
?>
<?php
\$description1 = Html::encode(\$model->description);
if(mb_strlen(\$description1) > 109 ) {
\$description1 = mb_substr(\$description1, 0, 110);
\$description1 = \$description1 . '...';
}
?>
<div class=\"index-block1\">
<a href=\"<?= Url::to(['general/article', 'id' => Html::encode(\$model->id)]);?>\" style=\"margin-bottom: 60px;\">
<?php
\$currentDate = Html::encode(\$model->data);
\$_monthsList = array(
  \"01\" => \"января\",
  \"02\" => \"февраля\",
  \"03\" => \"марта\",
  \"04\" => \"апреля\",
  \"05\" => \"мая\",
  \"06\" => \"июня\",
  \"07\" => \"июля\",
  \"08\" => \"августа\",
  \"09\" => \"сентября\",
  \"10\" => \"октября\",
  \"11\" => \"ноября\",
  \"12\" => \"декабря\"
);
\$_mD = date(\"m\", strtotime(\$currentDate));
\$currentDate = str_replace(\$_mD, \" \".\$_monthsList[\$_mD].\" \", \$currentDate);
?>
<p class=\"index-block1-data\">
<span><?= date(\"j\", strtotime(Html::encode(\$model->data))); ?> <?= \$_monthsList[\$_mD] ?> <?= date(\"Y\", strtotime(Html::encode(\$model->data))); ?></span></p>
<picture>
  <source srcset=\"/images/blogs/<?= Html::encode(\$model->img_small); ?>.webp\" type=\"image/webp\">
  <img data-src=\"/images/blogs/<?= Html::encode(\$model->img_small); ?>.jpg\" style=\"width: 100%\">
</picture>
<div class=\"index-block1-description-h4\">
<?php
\$h4 = Html::encode(\$model->title);
if(mb_strlen(\$h4) > 64) {
\$h4 = mb_substr(\$h4, 0, 64);
\$h4 = \$h4 . '...';
}
?>
<h4><?= \$h4; ?></h4>
<p><?= \$description1; ?></p>
</div>
</a>
</div>

";
fwrite($myfile, $txt);
fclose($myfile);
?>
<?php endif; ?>
<?php
$form = ActiveForm::begin(['action' => 'item-author']);
echo $form->field($model, 'big');
echo $form->field($model, 'small');
echo $form->field($model, 'table');
echo Html::submitButton('в item-author');
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
