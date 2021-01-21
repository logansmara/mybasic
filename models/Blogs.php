<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "blogs".
 *
 * @property int $id
 * @property int $number
 * @property string $title
 * @property string $description
 * @property string $text
 * @property string $url_video
 * @property string $img_small
 * @property string $category
 * @property string $class
 * @property string $login_author
 * @property string $data
 */
class Blogs extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'blogs';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['number', 'title', 'description', 'text', 'img_small', 'category', 'login_author'], 'required'],
            [['number'], 'integer'],
            [['text'], 'string'],
            [['data'], 'safe'],
            [['title'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 110],
            [['url_video', 'img_small', 'category'], 'string', 'max' => 100],
            [['class'], 'string', 'max' => 20],
            [['login_author'], 'string', 'max' => 50],
            [['number'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'number' => 'Number',
            'title' => 'Title',
            'description' => 'Description',
            'text' => 'Text',
            'url_video' => 'Url Video или Number Article',
            'img_small' => 'Img Small',
            'category' => 'Category',
            'class' => 'Class',
            'login_author' => 'Login Author',
            'data' => 'Data',
        ];
    }
}
