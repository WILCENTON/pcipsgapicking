<?php

namespace app\modules\sgapicking\models;

use Yii;

/**
 * This is the model class for table "sga_pickinglin".
 *
 * @property int $picking
 * @property string $codpedido
 * @property string $servir
 * @property string $estado P=Parcial S=Servido R=Rotura Stock
 * @property int $operario operario que finaliza picking
 * @property string $ffinal instante final del picking
 *
 * @property SgaPicking $picking0
 * @property SgaJpedidoslin $codpedido0
 * @property SgaOperarios $operario0
 */
class SgaPickinglin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sga_pickinglin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['picking', 'codpedido'], 'required'],
            [['picking', 'operario'], 'integer'],
            [['servir'], 'number'],
            [['ffinal'], 'safe'],
            [['codpedido'], 'string', 'max' => 20],
            [['estado'], 'string', 'max' => 1],
            [['picking', 'codpedido'], 'unique', 'targetAttribute' => ['picking', 'codpedido']],
            [['picking'], 'exist', 'skipOnError' => true, 'targetClass' => SgaPicking::className(), 'targetAttribute' => ['picking' => 'picking']],
            [['codpedido'], 'exist', 'skipOnError' => true, 'targetClass' => SgaJpedidoslin::className(), 'targetAttribute' => ['codpedido' => 'codpedido']],
            [['operario'], 'exist', 'skipOnError' => true, 'targetClass' => SgaOperarios::className(), 'targetAttribute' => ['operario' => 'operario']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'picking' => 'Picking',
            'codpedido' => 'Codpedido',
            'servir' => 'Servir',
            'estado' => 'Estado',
            'operario' => 'Operario',
            'ffinal' => 'Ffinal',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPicking0()
    {
        return $this->hasOne(SgaPicking::className(), ['picking' => 'picking']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCodpedido0()
    {
        return $this->hasOne(SgaJpedidoslin::className(), ['codpedido' => 'codpedido']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOperario0()
    {
        return $this->hasOne(SgaOperarios::className(), ['operario' => 'operario']);
    }

    /**
     * @inheritdoc
     * @return SgaPickinglinQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SgaPickinglinQuery(get_called_class());
    }
}
