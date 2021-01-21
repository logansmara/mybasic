<?php
/*
В таблице add_group находятся все группы из разворачивающегося меню
Эта модель связана с моделью Category (hasOne)
Используется в меню в views/layout/light.php для вычисления count($category->addgroup)
*/
namespace app\models;

use Yii;

/**
 * This is the model class for table "freelancers".
 *
 * @property int $id
 * @property int $category_id
 * @property string $url
 * @property string $name
 * @property string $surname
 * @property string $title
 * @property string $description
 */
class AddGroup extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'add_group';
    }

    public function getCategory() {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id'], 'integer'],
            [['url'], 'required'],
            [['url'], 'string', 'max' => 100],
            [['title'], 'string', 'max' => 255],
            [['description'], 'string', 'max' => 1000],
            [['url'], 'unique'],
            [['moderator'], 'string'],
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
        ];
    }
}
