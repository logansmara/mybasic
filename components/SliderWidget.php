<?php
namespace app\components;

use yii\base\Widget;
use app\models\Slider;

class SliderWidget extends Widget {
	public $slides;
    public function init() {
        parent::init();
        $this->slides = Slider::find()->all();
    }
    public function run() {
        //$this->categories = Category::find()->all();
        return $this->render('slider', ['slides' => $this->slides]);
    }
}
