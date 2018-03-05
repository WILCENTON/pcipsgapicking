<?php

namespace app\modules\sgapicking\models;

use Yii;

/**
 * This is the model class for table "sga_pickinglec".
 *
 * @property int $picking
 * @property string $codpedido
 * @property string $fecha instante del picking
 * @property int $serial
 * @property string $servido
 * @property int $operario operario que realiza picking
 * @property string $codbarras codigo leido: puede ser codbarras o articulo
 *
 * @property SgaPicking $picking0
 * @property SgaJpedidoslin $codpedido0
 * @property SgaOperarios $operario0
 */
class SgaPickinglec extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sga_pickinglec';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['picking', 'codpedido', 'fecha'], 'required'],
            [['picking', 'serial', 'operario'], 'integer'],
            [['fecha'], 'safe'],
            [['servido'], 'number'],
            [['codpedido', 'codbarras'], 'string', 'max' => 20],
            [['picking', 'codpedido', 'fecha'], 'unique', 'targetAttribute' => ['picking', 'codpedido', 'fecha']],
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
            'fecha' => 'Fecha',
            'serial' => 'Serial',
            'servido' => 'Servido',
            'operario' => 'Operario',
            'codbarras' => 'Codbarras',
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
     * @return SgaPickinglecQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SgaPickinglecQuery(get_called_class());
    }
}
