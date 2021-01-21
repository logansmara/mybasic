<?php
/*
Модель для кнопки Zvonok
*/
namespace app\models;

use Yii;
use yii\base\Model;

class ZvonokForm extends Model
{
    public $telephone;
    public $soglasye;

    public function rules()
    {
        return [
            ['telephone', 'required'],
            ['soglasye', 'compare', 'compareValue' => 1, 'message' => 'Выставите флажок, иначе форма не отправится!']
        ];
    }
    
    public function attributeLabels()
    {
        return [
            'telephone' => 'Телефон',
            'soglasye' => 'Согласие на обработку персональных данных'
        ];
    }
    

}