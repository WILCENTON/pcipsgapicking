<?php

namespace app\modules\sgapicking\models;

use yii\base\Model;
use yii\web\UploadedFile;

class Importped extends Model {

    /**
     * @var UploadedFile
     */
    public $fichero;

    public function rules() {
        return [
            [['fichero'], 'file', 'skipOnEmpty' => false, 'extensions' => 'txt'],
        ];
    }

    public function upload() {
        if ($this->validate()) {
            $this->fichero->saveAs('/tmp/fichped.txt');
            return true;
        } else {
            return false;
        }
    }

}
