<?php

namespace app\modules\varios\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "accesos".
 *
 * @property integer $usernum
 * @property string $termi
 * @property integer $acceso
 * @property integer $empresa
 * @property integer $ejercicio
 * @property string $emprenom
 * @property integer $w
 * @property string $fechasis
 * @property string $authtoken
 * @property string $ultiacceso
 */
class Accesos extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'accesos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['usernum'], 'required'],
            [['usernum', 'acceso', 'empresa', 'ejercicio', 'w'], 'integer'],
            [['fechasis', 'ultiacceso'], 'safe'],
            [['termi', 'emprenom'], 'string', 'max' => 40],
            [['authtoken'], 'string', 'max' => 127],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'usernum' => 'Usernum',
            'termi' => 'Termi',
            'acceso' => 'Acceso',
            'empresa' => 'Empresa',
            'ejercicio' => 'Ejercicio',
            'emprenom' => 'Emprenom',
            'w' => 'W',
            'fechasis' => 'Fechasis',
            'authtoken' => 'Authtoken',
            'ultiacceso' => 'Ultiacceso',
        ];
    }
}
