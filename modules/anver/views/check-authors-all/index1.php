<!-- только я -->
<?php if(Yii::$app->user->identity->username == 'anver1'):?>
<?php
$dir = '../views';
$files = scandir($dir);
echo "<h1 style='font-size: 32px;margin: 20px 0;'>author->login из таблицы authors</h1>";
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
