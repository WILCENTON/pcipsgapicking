<?php

namespace app\modules\sgapicking\models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "sga_operarios".
 *
 * @property int $operario
 * @property string $nombre
 * @property string $movil
 * @property string $email
 * @property int $almacen
 * @property string $estado A=Alta, B=Baja
 * @property string $codexterno Codigo en programa externo
 *
 * @property SgaControlexislec[] $sgaControlexislecs
 * @property SgaControlpedlec[] $sgaControlpedlecs
 * @property SgaPicking[] $sgaPickings
 * @property SgaPickinglec[] $sgaPickinglecs
 * @property SgaPickinglin[] $sgaPickinglins
 */
class SgaOperarios extends ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'sga_operarios';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['nombre'], 'required'],
            [['almacen'], 'integer'],
            [['nombre'], 'string', 'max' => 40],
            [['movil', 'codexterno'], 'string', 'max' => 20],
            [['email'], 'string', 'max' => 50],
            [['estado'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'operario' => 'Operario',
            'nombre' => 'Nombre',
            'movil' => 'Movil',
            'email' => 'Email',
            'almacen' => 'Almacen',
            'estado' => 'Estado',
            'codexterno' => 'Codexterno',
        ];
    }

    /**
     * @return ActiveQuery
     */
    public function getSgaControlexislecs() {
        return $this->hasMany(SgaControlexislec::className(), ['operario' => 'operario']);
    }

    /**
     * @return ActiveQuery
     */
    public function getSgaControlpedlecs() {
        return $this->hasMany(SgaControlpedlec::className(), ['operario' => 'operario']);
    }

    /**
     * @return ActiveQuery
     */
    public function getSgaPickings() {
        return $this->hasMany(SgaPicking::className(), ['operario' => 'operario']);
    }

    /**
     * @return ActiveQuery
     */
    public function getSgaPickinglecs() {
        return $this->hasMany(SgaPickinglec::className(), ['operario' => 'operario']);
    }

    /**
     * @return ActiveQuery
     */
    public function getSgaPickinglins() {
        return $this->hasMany(SgaPickinglin::className(), ['operario' => 'operario']);
    }

    /**
     * @inheritdoc
     * @return SgaOperariosQuery the active query used by this AR class.
     */
    public static function find() {
        return new SgaOperariosQuery(get_called_class());
    }

}
