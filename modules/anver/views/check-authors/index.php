<!-- только я -->
<?php if(Yii::$app->user->identity->username == 'anver1'):?>
<p>
Перебираются все папки views : $dir = '../views'; scandir($dir);<br>
Затем берется foreach из таблицы authors
<br>
Смотрим, есть ли для каждой author->login из таблицы authors папка с таким же именем в views
<br>
in_array($author->login, $files);
</p>
<hr style="margin: 30px 0;">
<?php
$dir = '../views';
$files = scandir($dir);
foreach ($authors as $author) {
	echo $author->login;
	if(in_array($author->login, $files)) {
		echo " ";
	} else {
		echo "<span style='color: red'> - нет папки " . $author->login . " в views</span>";
	}
	echo "<br>";
}
?>
<?php endif; ?>
<hr style="margin: 30px 0;">
