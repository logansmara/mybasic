<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "userfreelancer".
 *
 * @property int $id
 * @property int $category_id
 * @property string $url_user
 * @property string $url_group
 * @property string $name
 * @property string $surname
 * @property string $title
 * @property string $description
 * @property int $moderator
 */
class UserFreelancers extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'userfreelancers';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'moderator'], 'integer'],
            [['url_user', 'url_group'], 'required'],
            [['url_user', 'title'], 'string', 'max' => 255],
            [['url_group', 'name', 'surname'], 'string', 'max' => 100],
            [['description'], 'string', 'max' => 500],
            [['url_user'], 'unique'],
            [['url_group'], 'unique'],
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
            'url_user' => 'Url User',
            'url_group' => 'Url Group',
            'name' => 'Name',
            'surname' => 'Surname',
            'title' => 'Title',
            'description' => 'Description',
            'moderator' => 'Moderator',
        ];
    }
}
