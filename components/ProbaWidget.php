<?php
namespace app\components;

use yii\base\Widget;
use app\models\Category;

class ProbaWidget extends Widget {
	public $categories;
    public function init() {
        parent::init();
        $this->categories = Category::find()->all();
    }
    public function run() {
        //$this->categories = Category::find()->all();
        return $this->render('proba', ['categories' => $this->categories]);
    }
}
