<?php
use app\models\VkKsyushaDelaet;
$vksmall = VkKsyushaDelaet::find()->where(['moderator' => '0'])->all();
foreach ($vksmall as $vk) {
	echo '<span style="color:red">' . $vk->number . ' - ' . $vk->title . '</span>';
}


