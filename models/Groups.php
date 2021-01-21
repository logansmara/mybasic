<?php
/*
В таблице add_group находятся все группы из разворачивающегося меню
Эта модель связана с моделью Category (hasOne)
Используется в меню в views/vkontakte/category
*/
namespace app\models;
use Yii;
/**
 * This is the model class for table "groups".
 *
 * @property int $id
 * @property int $category_id
 * @property string $url
 * @property string $title
 * @property string $description
 * @property int $moderator
 * @property string $img
 */
class Groups extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'groups';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'moderator'], 'integer'],
            [['url'], 'required'],
            [['url', 'img'], 'string', 'max' => 100],
            [['title'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 1000],
            [['url'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'url' => 'Url',
            'title' => 'Title',
            'description' => 'Description',
            'moderator' => 'Moderator',
            'img' => 'Img',
        ];
    }
}
