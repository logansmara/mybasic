<!-- только я -->
<?php if(Yii::$app->user->identity->username == 'anver1'):?>
<p style="border: 1px solid #999; padding: 10px;margin: 10px 0;">
Наоборот, проверяем для каждой папки из views наличие логина с таким же именем из таблицы authors
</p>
<?php
for ($i=0; $i < count($authors); $i++) {
	/* делаем из foreach строку */
	$qw .= $authors[$i]['login'] . ' ';
}
/* делаем из строки массив */
$qwerty = explode(" ", $qw);
?>
<?php
$dir = '../views';
$files = scandir($dir);
?>
<?php
foreach ($files as $file) {
if(
$file != '.' &&
$file != '..' &&
$file != 'layouts' &&
$file != 'site' &&
$file != 'vkontakte'
) {
	echo $file;
	if(in_array($file, $qwerty)) {
		echo '';
	} else {
		echo " - <span style='color:red'>нет строки " . $file . " в таблице authors</span>";
	}
	echo "<br>";
}
}
?>
<hr style="margin: 30px 0;">
<?php endif; ?>
