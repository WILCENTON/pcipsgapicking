<?php

namespace app\modules\sgapicking\models;

use Yii;

/**
 * This is the model class for table "sga_controlpedlec".
 *
 * @property int $pedido
 * @property string $fecha instante lectura
 * @property int $serial
 * @property string $servido
 * @property int $operario operario que realiza picking
 * @property string $codbarras codigo leido: puede ser codbarras o articulo
 *
 * @property SgaJpedidos $pedido0
 * @property SgaOperarios $operario0
 */
class SgaControlpedlec extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sga_controlpedlec';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pedido', 'fecha'], 'required'],
            [['pedido', 'serial', 'operario'], 'integer'],
            [['fecha'], 'safe'],
            [['servido'], 'number'],
            [['codbarras'], 'string', 'max' => 20],
            [['pedido', 'fecha'], 'unique', 'targetAttribute' => ['pedido', 'fecha']],
            [['pedido'], 'exist', 'skipOnError' => true, 'targetClass' => SgaJpedidos::className(), 'targetAttribute' => ['pedido' => 'pedido']],
            [['operario'], 'exist', 'skipOnError' => true, 'targetClass' => SgaOperarios::className(), 'targetAttribute' => ['operario' => 'operario']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pedido' => 'Pedido',
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
    public function getPedido0()
    {
        return $this->hasOne(SgaJpedidos::className(), ['pedido' => 'pedido']);
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
     * @return SgaControlpedlecQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SgaControlpedlecQuery(get_called_class());
    }
}
