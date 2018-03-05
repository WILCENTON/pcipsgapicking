<?php

namespace app\modules\sgapicking\models;

use Yii;

/**
 * This is the model class for table "sga_controlexis".
 *
 * @property string $articulo
 * @property string $nombre
 * @property string $ubicacion
 * @property string $existencia
 * @property string $codbarras
 *
 * @property SgaControlexislec[] $sgaControlexislecs
 */
class SgaControlexis extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sga_controlexis';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['articulo'], 'required'],
            [['existencia'], 'number'],
            [['articulo', 'ubicacion', 'codbarras'], 'string', 'max' => 20],
            [['nombre'], 'string', 'max' => 50],
            [['articulo'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'articulo' => 'Articulo',
            'nombre' => 'Nombre',
            'ubicacion' => 'Ubicacion',
            'existencia' => 'Existencia',
            'codbarras' => 'Codbarras',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSgaControlexislecs()
    {
        return $this->hasMany(SgaControlexislec::className(), ['articulo' => 'articulo']);
    }

    /**
     * @inheritdoc
     * @return SgaControlexisQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SgaControlexisQuery(get_called_class());
    }
}
