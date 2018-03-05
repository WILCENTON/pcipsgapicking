<?php

namespace app\modules\sgapicking\models;

use Yii;

/**
 * This is the model class for table "sga_controlexislec".
 *
 * @property string $articulo
 * @property string $fecha instante lectura
 * @property int $serial
 * @property string $cantidad
 * @property int $operario operario que realiza picking
 * @property string $codbarras codigo leido: puede ser codbarras o articulo
 *
 * @property SgaControlexis $articulo0
 * @property SgaOperarios $operario0
 */
class SgaControlexislec extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sga_controlexislec';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['articulo', 'fecha'], 'required'],
            [['fecha'], 'safe'],
            [['serial', 'operario'], 'integer'],
            [['cantidad'], 'number'],
            [['articulo', 'codbarras'], 'string', 'max' => 20],
            [['articulo', 'fecha'], 'unique', 'targetAttribute' => ['articulo', 'fecha']],
            [['articulo'], 'exist', 'skipOnError' => true, 'targetClass' => SgaControlexis::className(), 'targetAttribute' => ['articulo' => 'articulo']],
            [['operario'], 'exist', 'skipOnError' => true, 'targetClass' => SgaOperarios::className(), 'targetAttribute' => ['operario' => 'operario']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'articulo' => 'Articulo',
            'fecha' => 'Fecha',
            'serial' => 'Serial',
            'cantidad' => 'Cantidad',
            'operario' => 'Operario',
            'codbarras' => 'Codbarras',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticulo0()
    {
        return $this->hasOne(SgaControlexis::className(), ['articulo' => 'articulo']);
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
     * @return SgaControlexislecQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SgaControlexislecQuery(get_called_class());
    }
}
