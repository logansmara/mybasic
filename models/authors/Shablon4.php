<?php
namespace app\models\authors;
use Yii;
class Shablon4 extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'vk_shablon4';
    }
    public function rules()
    {
        return [
            [['title', 'description', 'text', 'img_small'], 'required'],
            [['moderator'], 'integer'],
            [['text'], 'string'],
            [['data'], 'safe'],
            [['title', 'description'], 'string', 'max' => 255],
            [['img_small', 'rubrika'], 'string', 'max' => 100],
        ];
    }
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'moderator' => 'Moderator',
            'description' => 'Описание',
            'text' => 'Основной текст',
            'img_small' => 'Маленькое изображение',
            'rubrika' => 'Рубрика',
            'data' => 'Data',
        ];
    }
}
