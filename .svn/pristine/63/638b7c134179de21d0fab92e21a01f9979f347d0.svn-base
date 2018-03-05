<?php

namespace app\modules\varios\models;

use app\models\extinval\Extclientes;
use app\models\varios\Usuarios;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "userlink".
 *
 * @property integer $usernum
 * @property string $tipo
 * @property integer $codigo
 */
class Userlink extends ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'userlink';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['usernum', 'tipo', 'codigo'], 'required'],
            [['usernum', 'codigo'], 'integer'],
            [['tipo'], 'string', 'max' => 4],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'usernum' => 'Usernum',
            'tipo' => 'Tipo',
            'codigo' => 'Codigo',
        ];
    }

    public function getNomcodigo() {
        if ($this->tipo == "CLIE") {
            $model_codigo = Extclientes::findOne($this->codigo);
            return $model_codigo->nombre;
        }
        return "";
    }

    public function getNomusuario() {
        if (!is_null($this->usernum)) {
            $model_codigo = Usuarios::findOne(['usernum'=>$this->usernum]);
            return $model_codigo->usuario;
        }
        return "";
    }

}
