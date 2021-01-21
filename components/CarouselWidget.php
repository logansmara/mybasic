<?php
namespace app\components;

use yii\base\Widget;
use app\models\Carousel;

class CarouselWidget extends Widget {
	public $carousel;
    public function init() {
        parent::init();
        $this->carousel = Carousel::find()->all();
    }
    public function run() {
        //$this->categories = Category::find()->all();
        return $this->render('carousel', ['carousel' => $this->carousel]);
    }
}
