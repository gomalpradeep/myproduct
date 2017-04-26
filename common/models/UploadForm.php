<?php
namespace common\models;

use Yii;
use yii\base\Model;
use yii\web\UploadedFile;

/**
 * Login form
 */

class UploadForm extends Model
{
    /**
     * @var UploadedFile[]
     */
    public $product_image;

    public function rules()
    {
        return [
            [['product_image'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg ,jpeg, gif', 'maxFiles' => 4,'maxSize'=>1024 * 1024 * 2],
        ];
    }
    
    public function upload()
    {
		$this->product_image->name = $file;
        if ($this->validate()) { 
            foreach ($this->imageFiles as $file) {
				
                $file->saveAs('uploads/' . $file->baseName . '.' . $file->extension);
            }
            return true;
        } else {
            return false;
        }
    }
}

