<?php
/*
В таблице double_add_group и fifth_group находятся все группы еще не
представленные в разворачивающемся меню.
Только в админке.
*/
namespace app\models;

use Yii;

/**
 * This is the model class for table "double_add_group".
 *
 * @property int $id
 * @property int $category_id
 * @property string $url
 * @property string $title
 * @property string $description
 * @property int $moderator
 */
class DoubleAddGroup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'double_add_group';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'moderator'], 'integer'],
            [['url'], 'required'],
            [['url'], 'string', 'max' => 100],
            [['title'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 1000],
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
        ];
    }
}
