<?php
namespace app\modules\admin\models;
use yii\base\Model;
use yii\web\UploadedFile;
use Yii;
use yii\imagine\Image;
class ImageShablon4 extends Model
{
    public $imageFile;
    public $delete;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg, jpeg'],
            [['delete'] , 'string'],
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $this->imageFile->saveAs('images/authors/shablon4/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);
            $image = Yii::getAlias('@webroot/images/authors/shablon4/' . $this->imageFile->baseName . '.' . $this->imageFile->extension);

Image::thumbnail($image, 800, 500)
 ->save(Yii::getAlias('@webroot/images/authors/shablon4/' . $this->imageFile->baseName . '.' . $this->imageFile->extension), ['quality' => 80]);
            return true;
        } else {
            return false;
        }
    }
}

