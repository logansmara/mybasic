<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>
<h1 style="font-size: 28px;margin-bottom: 10px;">anver/sql</h1>
<span style="font-size: 32px;color: red;">3</span>
<?php
$vktable = 'vk_' . $table;
?>
<?php if(\Yii::$app->db->getTableSchema($vktable, true) !== null): ?>
<p style="color: red; margin: 10px 0;">
  Такая таблица <span style="color: red;">уже существует!</span>
</p>
<?php else: ?>
<p style="color: green; margin: 10px 0;">
Создаем таблицу. Поученный файл <?= $vktable ?>.sql должен находиться в папке /modules/papka-sql.
</p>
<?php
$myfile = fopen("../modules/papka-sql/" . $vktable . ".sql", "w") or die("Не удается открыть файл!");
$txt =
"SET SQL_MODE = \"NO_AUTO_VALUE_ON_ZERO\";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = \"+00:00\";

CREATE TABLE `$vktable` (
  `id` int(10) NOT NULL,
  `title` varchar(255) NOT NULL,
  `moderator` int(1) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `img_small` varchar(100) NOT NULL,
  `rubrika` varchar(100) NOT NULL DEFAULT 'Разное',
  `data` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

ALTER TABLE `$vktable`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `$vktable`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;
";
fwrite($myfile, $txt);
fclose($myfile);
?>
<?php endif; ?>

<?php
$form = ActiveForm::begin(['action' => 'images']);
echo $form->field($model, 'big');
echo $form->field($model, 'small');
echo $form->field($model, 'table');
echo Html::submitButton('в images');
ActiveForm::end();
?>
<br>
<?php
$controller = 'images/authors/' . $small;
if (file_exists($controller)): ?>
<span style="color: red">
    файл <?= $controller; ?> уже существует!
</span>
<?php else: ?>
<span style="color: green">
    файла <?= $controller; ?> - нет
</span>
<?php endif; ?>
