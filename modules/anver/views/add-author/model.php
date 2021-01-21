<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>
<h1 style="font-size: 28px;margin-bottom: 10px;">anver/model</h1>
<span style="font-size: 32px;color: red;">2</span>
<hr>
<?php
$vktable = 'vk_' . $table;
$filename = '../models/authors/' . $big . '.php';
?>
<?php if (file_exists($filename)): ?>
Файл <?= $filename; ?> <span style="color: red;">уже существует!</span>
<hr>
<?php else: ?>
<?php
$myfile = fopen($filename, "w") or die("Не удается открыть файл!");
$txt =
"<?php
namespace app\models\authors;
use Yii;
class $big extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return '$vktable';
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
";
fwrite($myfile, $txt);
fclose($myfile);
?>
<?php endif; ?>
<?php
$form = ActiveForm::begin(['action' => 'sql']);
echo $form->field($model, 'big');
echo $form->field($model, 'small');
echo $form->field($model, 'table');
echo Html::submitButton('в sql');
ActiveForm::end();
?>
<br>
<?php
$controller = '../modules/papka-sql/' . $vktable . '.sql';
if (file_exists($controller)): ?>
<span style="color: red">
    файл <?= $controller; ?> уже существует!
</span>
<?php else: ?>
<span style="color: green">
    файла <?= $controller; ?> - нет
</span>
<?php endif; ?>
