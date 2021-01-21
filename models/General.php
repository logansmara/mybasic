<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "general".
 *
 * @property int $id
 * @property string $login
 * @property string $title
 * @property int $moderator
 * @property string $description
 * @property string $text
 * @property string $img_small
 * @property string $rubrika
 * @property string $data
 */
class General extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'general';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'description', 'text', 'img_small'], 'required'],
            [['moderator'], 'integer'],
            [['text'], 'string'],
            [['data'], 'safe'],
            [['login', 'img_small', 'rubrika'], 'string', 'max' => 100],
            [['title', 'description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'title' => 'Title',
            'moderator' => 'Moderator',
            'description' => 'Description',
            'text' => 'Text',
            'img_small' => 'Img Small',
            'rubrika' => 'Rubrika',
            'data' => 'Data',
        ];
    }
}
