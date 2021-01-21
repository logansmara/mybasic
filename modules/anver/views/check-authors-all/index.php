<!-- только я -->
<?php if(Yii::$app->user->identity->username == 'anver1'):?>
<p>
Перебираются все папки views : $dir = '../views'; scandir($dir);<br>
Затем берется foreach из таблицы authors
<br>
Смотрим, есть ли для каждой author->login из таблицы authors папка с таким же именем в views
<br>
in_array($author->login, $files);
<br>
В отличие от страницы check-authors, на этой страницы также для каждой $author->login проверяем все папки и файлы
</p>
<hr style="margin: 30px 0;">
<?php
$dir = '../views';
$files = scandir($dir);
foreach ($authors as $author) {
	echo $file = $author->login;
	if(in_array($file, $files)) {
?>

 - папка <?= $file; ?> есть<br>
<?php /* Проверка в папке views/$file файла _item_author.php */
$fileitemauthor = '../views/' . $file . '/_item_author.php';
if (!file_exists($fileitemauthor)): ?>
<span style="color: red">
Файла <?= $fileitemauthor; ?> - нет<br>
</span>
<?php endif; ?>
<?php /* Проверка в папке views/$file файла _item_index.php */
$fileitemindex = '../views/' . $file . '/_item_index.php';
if (!file_exists($fileitemindex)): ?>
<span style="color: red">
Файла <?= $fileitemindex; ?> - нет<br>
</span>
<?php endif; ?>
<?php /* Проверка в папке views/$file файла article */
$filearticle = '../views/' . $file . '/article.php';
if (!file_exists($filearticle)): ?>
<span style="color: red">
Файла <?= $filearticle; ?> - нет<br>
</span>
<?php endif; ?>
<?php /* Проверка в папке views/$file файла index */
$fileindex = '../views/' . $file . '/index.php';
if (!file_exists($fileindex)): ?>
<span style="color: red">
Файла <?= $fileindex; ?> - нет<br>
</span>
<?php endif; ?>
<?php /* Проверка папки image */
$fileimage = '../web/images/authors/' . $file;
if (!file_exists($fileimage)): ?>
<span style="color: red">
Папки <?= $fileimage; ?> - нет<br>
</span>
<?php endif; ?>
<?php /* Проверка папки image */
$filesmallimage = '../web/images/authors/small' . $file;
if (!file_exists($filesmallimage)): ?>
<span style="color: red">
Папки <?= $filesmallimage; ?> - нет<br>
</span>
<?php endif; ?>
<?php /* Проверка таблицы в БД */
$filetable = 'vk_' . $file;
$filetable1 = str_replace('-', '_', $filetable);
?>
<?php if(\Yii::$app->db->getTableSchema($filetable1, true) == null): ?>
<span style="color: red">
Таблицы <?= $filetable1; ?> - нет<br>
</span>
<?php endif; ?>
<?php /* Проверка контролеров */
$controller = '../controllers/' . $file . 'Controller.php';
$controller1 = str_replace('-', '', $controller);
if (!file_exists($controller1)): ?>
<span style="color: red">
файла <?= $controller1; ?> - нет<br>
</span>
<?php endif; ?>
<?php
$modulescontroller = '../modules/admin/controllers/' . $file . 'Controller.php';
$modulescontroller1 = str_replace('-', '', $modulescontroller);
if (!file_exists($modulescontroller1)): ?>
<span style="color: red">
	файла <?= $modulescontroller; ?> - нет<br>
</span>
<?php endif; ?>
<?php
/* Проверка модулей */
$model = '../models/Vk' . $file . '.php';
$model1 = $filetable1 = str_replace('-', '', $model);
if (!file_exists($model1)): ?>
<span style="color: red">
    Файла <?= $model1; ?> нет<br>
</span>
<?php endif; ?>
<?php
$modulesmodel = '../modules/admin/models/Image' . $file . '.php';
$modulesmodel1 = $filetable1 = str_replace('-', '', $modulesmodel);
if (!file_exists($modulesmodel1)): ?>
<span style="color: red">
    Файла <?= $modulesmodel; ?> нет<br>
</span>
<?php endif; ?>
<?php
$modulesmodel = '../modules/admin/models/SmallImage' . $file . '.php';
$modulesmodel1 = $filetable1 = str_replace('-', '', $modulesmodel);
if (!file_exists($modulesmodel1)): ?>
<span style="color: red">
    Файла <?= $modulesmodel; ?> нет<br>
</span>
<?php endif; ?>
<?php
/* Проверка папки modules/admin/views */
$modulesviews = '../modules/admin/views/' . $file;
if (!file_exists($modulesviews)): ?>
<span style="color: red">
    Папки <?= $modulesviews; ?> нет<br>
</span>
<?php endif; ?>
<?php
/* Проверка в папке modules/admin/views файла _form.php */
$modulesviewsform = '../modules/admin/views/' . $file . '/_form.php';
if (!file_exists($modulesviewsform)): ?>
<span style="color: red">
    Папки <?= $modulesviewsform; ?> нет<br> 
</span>
<?php endif; ?>
<?php
/* Проверка в папке modules/admin/views файла articles.php */
$modulesviewsarticles = '../modules/admin/views/' . $file . '/articles.php';
if (!file_exists($modulesviewsarticles)): ?>
<span style="color: red">
    Папки <?= $modulesviewsarticles; ?> нет<br> 
</span>
<?php endif; ?>
<?php
/* Проверка в папке modules/admin/views файла create.php */
$modulesviewscreate = '../modules/admin/views/' . $file . '/create.php';
if (!file_exists($modulesviewscreate)): ?>
<span style="color: red">
    Папки <?= $modulesviewscreate; ?> нет<br> 
</span>
<?php endif; ?>
<?php
/* Проверка в папке modules/admin/views файла image.php */
$modulesviewsimage = '../modules/admin/views/' . $file . '/image.php';
if (!file_exists($modulesviewsimage)): ?>
<span style="color: red">
    Папки <?= $modulesviewsimage; ?> нет<br> 
</span>
<?php endif; ?>
<?php
/* Проверка в папке modules/admin/views файла index.php */
$modulesviewsindex = '../modules/admin/views/' . $file . '/index.php';
if (!file_exists($modulesviewsindex)): ?>
<span style="color: red">
    Папки <?= $modulesviewsindex; ?> нет<br> 
</span>
<?php endif; ?>
<?php
/* Проверка в папке modules/admin/views файла small-image.php */
$modulesviewssmallimage = '../modules/admin/views/' . $file . '/small-image.php';
if (!file_exists($modulesviewssmallimage)): ?>
<span style="color: red">
    Папки <?= $modulesviewssmallimage; ?> нет<br> 
</span>
<?php endif; ?>
<?php
/* Проверка в папке modules/admin/views файла update.php */
$modulesviewsupdate = '../modules/admin/views/' . $file . '/update.php';
if (!file_exists($modulesviewsupdate)): ?>
<span style="color: red">
    Папки <?= $modulesviewsupdate; ?> нет<br> 
</span>
<?php endif; ?>
<?php
/* Проверка в папке modules/admin/views файла view.php */
$modulesviewsview = '../modules/admin/views/' . $file . '/view.php';
if (!file_exists($modulesviewsview)): ?>
<span style="color: red">
    Папки <?= $modulesviewsview; ?> нет<br> 
</span>
<?php endif; ?>


<?php
	} else {
		echo "<span style='color: red'> - нет папки " . $file . " в views</span>";
	}
	echo "<br>";
}
?>

<?php endif; ?>
