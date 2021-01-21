<?php
use app\models\authors\Qwerty;
$vksmall = Qwerty::find()->where(['moderator' => NULL])->all();
foreach ($vksmall as $vk) {
	echo '<span style="color:red">' . $vk->id . ' - ' . $vk->title . '</span>';
}


