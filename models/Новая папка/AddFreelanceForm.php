<?php
/*
Модель для кнопки Zvonok
*/
namespace app\models;

use Yii;
use yii\base\Model;

class AddFreelanceForm extends Model
{
    public $url;

    public function rules()
    {
        return [
            ['url', 'required'],
        ];
    }
    
    public function attributeLabels()
    {
        return [
            'url' => 'Адрес страницы ВКонтакте',
        ];
    }
    
}
