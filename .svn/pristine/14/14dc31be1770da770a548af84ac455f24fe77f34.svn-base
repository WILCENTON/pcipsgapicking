<?php

namespace app\modules\sgapicking\models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "sga_picking".
 *
 * @property int $picking
 * @property string $estado A=Alta, P=Parcial S=Servido
 * @property string $fecha
 * @property int $operario operario asignado
 * @property string $obser
 * @property string $finicio instante inicio preparacion
 * @property string $ffinal instante final preparacion
 * @property int $lineas Lineas totales preparadas
 * @property string $Unidades Unidades totales preparadas
 *
 * @property SgaOperarios $operario0
 * @property SgaPickinglec[] $sgaPickinglecs
 * @property SgaPickinglin[] $sgaPickinglins
 * @property SgaJpedidoslin[] $codpedidos
 * @property SgaPickingped[] $sgaPickingpeds
 * @property SgaJpedidos[] $pedidos
 */
class SgaPicking extends ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'sga_picking';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['picking'], 'required'],
            [['picking', 'operario', 'lineas'], 'integer'],
            [['fecha', 'finicio', 'ffinal'], 'safe'],
            [['Unidades'], 'number'],
            [['estado'], 'string', 'max' => 1],
            [['obser'], 'string', 'max' => 60],
            // [['picking'], 'unique'],
            [['operario'], 'exist', 'skipOnError' => true, 'targetClass' => SgaOperarios::className(), 'targetAttribute' => ['operario' => 'operario']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'picking' => 'Picking',
            'estado' => 'Estado',
            'fecha' => 'Fecha',
            'operario' => 'Operario',
            'obser' => 'Obser',
            'finicio' => 'Finicio',
            'ffinal' => 'Ffinal',
            'lineas' => 'Lineas',
            'Unidades' => 'Unidades',
        ];
    }

    public function beforeDelete() {
        if (!parent::beforeDelete()) {
            return false;
        }
        // eliminar pickingped
        $query = SgaPickingped::find()->where(['picking' => $this->picking]);
        $registros = $query->all();
        foreach ($registros as $reg) {
            $reg->delete();
        }

        // eliminar pedido de pickinglec
        $query = SgaPickinglec::find()->where(['picking' => $this->picking]);
        $registros = $query->all();
        foreach ($registros as $reg) {
            $reg->delete();
        }

        // eliminar lineas de picking
        $query = SgaPickinglin::find()->where(['picking' => $this->picking]);
        $registros = $query->all();
        foreach ($registros as $reg) {
            $reg->delete();
        }
        return true;
    }

    /**
     * @return ActiveQuery
     */
    public function getOperario0() {
        return $this->hasOne(SgaOperarios::className(), ['operario' => 'operario']);
    }

    /**
     * @return ActiveQuery
     */
    public function getSgaPickinglecs() {
        return $this->hasMany(SgaPickinglec::className(), ['picking' => 'picking']);
    }

    /**
     * @return ActiveQuery
     */
    public function getSgaPickinglins() {
        return $this->hasMany(SgaPickinglin::className(), ['picking' => 'picking']);
    }

    /**
     * @return ActiveQuery
     */
    public function getCodpedidos() {
        return $this->hasMany(SgaJpedidoslin::className(), ['codpedido' => 'codpedido'])->viaTable('sga_pickinglin', ['picking' => 'picking']);
    }

    /**
     * @return ActiveQuery
     */
    public function getSgaPickingpeds() {
        return $this->hasMany(SgaPickingped::className(), ['picking' => 'picking']);
    }

    /**
     * @return ActiveQuery
     */
    public function getPedidos() {
        return $this->hasMany(SgaJpedidos::className(), ['pedido' => 'pedido'])->viaTable('sga_pickingped', ['picking' => 'picking']);
    }

    /**
     * @inheritdoc
     * @return SgaPickingQuery the active query used by this AR class.
     */
    public static function find() {
        return new SgaPickingQuery(get_called_class());
    }

}
