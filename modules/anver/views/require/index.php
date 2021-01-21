<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Не прошедшие модерацию статьи';
$this->params['breadcrumbs'][] = $this->title;

$dir = '../views';
$files = scandir($dir);
?>
<h1 style="font-size: 28px;color: #159812;">Полный вариант (с логинами авторов)</h1>
<hr>
<?php
$i = 0;
foreach($files as $file) {
	++$i;
	if($file != '.' && $file != '..' && $file != 'layouts' && $file != 'vkontakte' && $file != 'site' && $file != 'general' && $i > 0) {
		echo " string<br>";
		echo '<h2 style="font-size:28px">' . $file . '</h2>';
		require_once '../views/' . $file . '/moderator.php';
		echo '<hr>';
		
	}
}

?>
