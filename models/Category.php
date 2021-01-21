<?php
/*
В таблице category находятся категории групп из разворачивающегося меню.
Модель Category подключена в views/layout/light.php
*/
namespace app\models;
use Yii;
/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string $name
 * @property int $number
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }
/*
* Связь много к одному (урок15 yii2-1 06:00 )
*/
    public function getGroups() {
        return $this->hasMany(Groups::className(), ['category_id' => 'id']);
    }

    public function getUsergroup() {
        return $this->hasMany(UserGroup::className(), ['category_id' => 'id']);
    }
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'number'], 'required'],
            [['number'], 'integer'],
            [['name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'number' => 'Number',
        ];
    }
}
