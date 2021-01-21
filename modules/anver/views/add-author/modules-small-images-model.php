<?php
use yii\helpers\Url;
use yii\bootstrap\ActiveForm;
use yii\helpers\Html;
?>
<h1 style="font-size: 28px;margin-bottom: 10px;">anver/modules-images-model</h1>
<span style="font-size: 32px;color: red;">22</span>
<hr>
<?php
$imagebig = 'SmallImage' . $big;
$filename = '../modules/admin/models/' . $imagebig . '.php';
?>
<?php if (file_exists($filename)): ?>
Файл <?= $filename; ?> <span style="color: red;">уже существует!</span>
<hr>
<?php else: ?>
<?php
$myfile = fopen($filename, "w") or die("Не удается открыть файл!");
$txt =
"<?php
namespace app\modules\admin\models;
use yii\base\Model;
use yii\web\UploadedFile;
use Yii;
use yii\imagine\Image;
class $imagebig extends Model
{
    public \$imageFile;
    public \$delete;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, jpeg'],
            [['delete'] , 'string'],
        ];
    }

    public function upload()
    {
        if (\$this->validate()) {
            \$this->imageFile->saveAs('images/authors/small$small/' . \$this->imageFile->baseName . '.' . \$this->imageFile->extension);
            \$image = Yii::getAlias('@webroot/images/authors/small$small/' . \$this->imageFile->baseName . '.' . \$this->imageFile->extension);

Image::thumbnail(\$image, 454, 251)
 ->save(Yii::getAlias('@webroot/images/authors/small$small/' . \$this->imageFile->baseName . '.' . \$this->imageFile->extension), ['quality' => 80]);
            return true;
        } else {
            return false;
        }
    }
}

";
fwrite($myfile, $txt);
fclose($myfile);
?>
<?php endif; ?>
<?php
$form = ActiveForm::begin(['action' => 'small-images']);
echo $form->field($model, 'big');
echo $form->field($model, 'small');
echo $form->field($model, 'table');
echo Html::submitButton('в small-images');
ActiveForm::end();
?>
<br>
<?php
$filename = 'images/authors/small' . $small;
if (!file_exists($filename)) {
    echo "Файла $filename <span style='color: green;'>еще нет</span><hr>";  
} else {
    echo "Файл $filename <span style='color: red;'>уже существует!</span><hr>";
}
?>
<div style="width: 100%;height: 100px"></div>