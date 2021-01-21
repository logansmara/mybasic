<?php

namespace app\modules\anver\models;

use Yii;
use yii\base\Model;

class AnverForm extends Model
{
    public $big;
    public $small;
    public $table;

    public function rules()
    {
        return [
            [['big','table','small'], 'required'],
        ];
    }
    
    public function attributeLabels()
    {
        return [
            'big' => 'Big',
            'small' => 'Small',
            'table' => 'Table',
        ];
    }
    
}