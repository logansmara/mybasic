<?php
use yii\helpers\Html;
/*
https://vitalik.ws/zametki/78-nazvanie-mesyaca-data-na-russkom-yazyke-s-pomoshyu-php.html
https://www.php.net/manual/ru/function.date.php
*/
//текущая дата
$currentDate = Html::encode($model->data);
//список месяцев с названиями для замены
$_monthsList = array(
  "01" => "января",
  "02" => "февраля",
  "03" => "марта",
  "04" => "апреля",
  "05" => "мая",
  "06" => "июня",
  "07" => "июля",
  "08" => "августа",
  "09" => "сентября",
  "10" => "октября",
  "11" => "ноября",
  "12" => "декабря"
);
 
//Наша задача - вывод русской даты, 
//поэтому заменяем число месяца на название:
$_mD = date("m", strtotime($currentDate)); //для замены
$currentDate = str_replace($_mD, " ".$_monthsList[$_mD]." ", $currentDate);
 
//теперь в переменной $currentDate хранится дата в формате 12 марта 2015
?>