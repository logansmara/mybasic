<?php
namespace app\components;

use yii\base\Behavior;
//use app\models\MyBehavior;

class MyBehavior extends Behavior {
	public $property1 = 'свойство один';
	public $property2 = 'свойство два';

	public function foo()
	{
		echo "метод из поведения";
	}
}
