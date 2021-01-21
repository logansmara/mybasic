<?php
/*
В таблице находятся все авторы.
Используется в vkontakte/authors
*/
namespace app\models;
use Yii;

/**
 * This is the model class for table "authors".
 *
 * @property int $id
 * @property string $login
 * @property string $name
 * @property string $surname
 * @property string $profession
 */
class Authors extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'authors';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['login', 'name', 'surname', 'profession'], 'required'],
            [['login'], 'string', 'max' => 100],
            [['name', 'surname'], 'string', 'max' => 20],
            [['profession'], 'string', 'max' => 30],
            [['login'], 'unique'],
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
            'name' => 'Name',
            'surname' => 'Surname',
            'profession' => 'Profession',
        ];
    }
}
