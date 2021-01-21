<?php

namespace app\models;
use app\components\MyBehavior;
use yii\base\Model;

/**
 * This is the model class for table "carousel".
 *
 * @property int $id
 * @property string $image
 */
class Primerbehaviors extends Model
{
    public $name = 'model\'s name';

    public function behaviors() {
    	return [
    		[
    			'class' => MyBehavior::className(),
    		]
    	];
    }
}
