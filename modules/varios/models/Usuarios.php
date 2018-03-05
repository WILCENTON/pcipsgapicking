<?php

namespace app\modules\varios\models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "usuarios".
 *
 * @property string $usuario
 * @property integer $usernum
 * @property integer $acceso
 * @property integer $ejercicio
 * @property string $authtoken
 * @property string $fechaclave
 * @property string $programa
 * @property string $clave
 * @property string $estado
 * @property integer $grupo
 * @property string $email
 * @property string $forzar
 * @property string $ultiacceso
 * @property string $escliente
 * @property string $esvendedor
 * @property string $esempleado
 * @property string $esproveedor
 * @property string $esninguno
 * @property string $esadministrador
 * @property integer $w
 */
class Usuarios extends ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'usuarios';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['usuario'], 'required'],
            [['usernum', 'acceso', 'ejercicio', 'grupo', 'w'], 'integer'],
            [['fechaclave', 'ultiacceso', 'clavenueva', 'usergrupo.nombre'], 'safe'],
            [['usuario', 'clave', 'email'], 'string', 'max' => 50],
            [['authtoken', 'programa'], 'string', 'max' => 127],
            [['estado', 'forzar', 'escliente', 'esvendedor', 'esempleado', 'esproveedor', 'esninguno', 'esadministrador'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'usuario' => 'Usuario',
            'usernum' => 'UserNum',
            'acceso' => 'Acceso',
            'ejercicio' => 'Ejercicio',
            'authtoken' => 'Authtoken',
            'fechaclave' => 'FechaClave',
            'programa' => 'Programa',
            'clave' => 'Clave',
            'estado' => 'Estado',
            'grupo' => 'Grupo',
            'email' => 'Email',
            'forzar' => 'Forzar',
            'ultiacceso' => 'UltiAcceso',
            'escliente' => 'EsCliente',
            'esvendedor' => 'EsVendedor',
            'esempleado' => 'EsEmpleado',
            'esproveedor' => 'EsProveedor',
            'esninguno' => 'EsNinguno',
            'esadministrador' => 'EsAdministrador',
            'w' => 'W',
            'usergrupo.nombre' => 'NomGrupo',
            'clavenueva' => 'Clave Nueva'
        ];
    }

    public function extraFields() {
        return ['usergrupo'];
    }

    /**
     * @return ActiveQuery
     */
    public function getUsergrupo() {
        return $this->hasOne(Usergrupos::className(), ['grupo' => 'grupo']);
    }

    public function getClavenueva() {
        return "";
    }

    public function setClavenueva($nueva) {
        //$this->clave = md5($nueva);
        $this->setAttribute("clave", md5($nueva));
    }

    public function beforeSave($insert) {
        if (!parent::beforeSave($insert)) {
            return false;
        }
        // ...custom code here... 
        if ($this->getIsNewRecord()) {
            $max = $this->find() // AQ instance
                    ->select('max(usernum)')
                    ->scalar(); 
            $this->usernum = $max+1;
            $this->clave = "*";
        }
        return true;
    }

}
