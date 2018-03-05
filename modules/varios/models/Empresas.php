<?php

namespace app\modules\varios\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "empresas".
 *
 * @property integer $empresa
 * @property string $nombre
 * @property string $direccion
 * @property string $direccion2
 * @property string $codpo
 * @property string $poblacion
 * @property string $provincia
 * @property string $pais
 * @property string $telefono
 * @property string $telex
 * @property string $fax
 * @property string $nif
 * @property string $email
 * @property string $web
 * @property string $pop3
 * @property string $smtp
 * @property string $ftp
 * @property string $registro1
 * @property string $registro2
 * @property string $anagrama_ftra
 * @property string $anagrama_pantalla
 * @property string $fichero_css
 * @property string $smtp_user
 * @property string $smtp_pwd
 * @property string $web_local
 * @property string $ruta_ayuda
 * @property resource $certificado
 * @property string $certificado_pwd
 */
class Empresas extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'empresas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['empresa'], 'required'],
            [['empresa'], 'integer'],
            [['certificado'], 'string'],
            [['nombre', 'email', 'web', 'pop3', 'smtp', 'ftp', 'anagrama_ftra', 'anagrama_pantalla', 'fichero_css', 'web_local', 'ruta_ayuda'], 'string', 'max' => 40],
            [['direccion', 'direccion2', 'poblacion', 'provincia', 'pais'], 'string', 'max' => 30],
            [['codpo'], 'string', 'max' => 10],
            [['telefono', 'nif'], 'string', 'max' => 20],
            [['telex', 'fax'], 'string', 'max' => 15],
            [['registro1', 'registro2'], 'string', 'max' => 60],
            [['smtp_user', 'smtp_pwd', 'certificado_pwd'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'empresa' => 'Empresa',
            'nombre' => 'Nombre',
            'direccion' => 'Direccion',
            'direccion2' => 'Direccion2',
            'codpo' => 'Codpo',
            'poblacion' => 'Poblacion',
            'provincia' => 'Provincia',
            'pais' => 'Pais',
            'telefono' => 'Telefono',
            'telex' => 'Telex',
            'fax' => 'Fax',
            'nif' => 'Nif',
            'email' => 'Email',
            'web' => 'Web',
            'pop3' => 'Pop3',
            'smtp' => 'Smtp',
            'ftp' => 'Ftp',
            'registro1' => 'Registro1',
            'registro2' => 'Registro2',
            'anagrama_ftra' => 'Anagrama Ftra',
            'anagrama_pantalla' => 'Anagrama Pantalla',
            'fichero_css' => 'Fichero Css',
            'smtp_user' => 'Smtp User',
            'smtp_pwd' => 'Smtp Pwd',
            'web_local' => 'Web Local',
            'ruta_ayuda' => 'Ruta Ayuda',
            'certificado' => 'Certificado',
            'certificado_pwd' => 'Certificado Pwd',
        ];
    }
}
