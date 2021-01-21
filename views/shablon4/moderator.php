<?php
use app\models\authors\Shablon4;
$vksmall = Shablon4::find()->where(['moderator' => NULL])->all();
foreach ($vksmall as $vk) {
	echo '<span style="color:red">' . $vk->id . ' - ' . $vk->title . '</span>';
}


