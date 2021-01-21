<?php

function debug($arr)
  {
    echo '<pre>' . print_r($arr, true) . '</pre>';
  }

function qw() {
	unlink(Yii::$app->basePath . '/web/images/qw/aeroplan.jpg');
}
