<?php

namespace app\modules\sgapicking\models;

use Yii;

/**
 * This is the model class for table "sga_contador".
 *
 * @property int $codigo
 * @property int $entradas
 * @property int $salidas
 * @property int $pedidoscli
 * @property int $picking
 */
class SgaContador extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sga_contador';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codigo'], 'required'],
            [['codigo', 'entradas', 'salidas', 'pedidoscli', 'picking'], 'integer'],
            [['codigo'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'codigo' => 'Codigo',
            'entradas' => 'Entradas',
            'salidas' => 'Salidas',
            'pedidoscli' => 'Pedidoscli',
            'picking' => 'Picking',
        ];
    }
}
