<?php

namespace app\modules\varios\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "dicmenusw".
 *
 * @property integer $codigo
 * @property string $descripcion
 * @property string $accion
 * @property integer $padre
 * @property string $acelerador
 * @property string $icono
 * @property integer $orden
 * @property integer $tipo
 * @property string $ayuda
 */
class Dicmenusw extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dicmenusw';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codigo'], 'required'],
            [['codigo', 'padre', 'orden', 'tipo'], 'integer'],
            [['descripcion', 'ayuda'], 'string', 'max' => 40],
            [['accion', 'icono'], 'string', 'max' => 80],
            [['acelerador'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'codigo' => 'Codigo',
            'descripcion' => 'Descripcion',
            'accion' => 'Accion',
            'padre' => 'Padre',
            'acelerador' => 'Acelerador',
            'icono' => 'Icono',
            'orden' => 'Orden',
            'tipo' => 'Tipo',
            'ayuda' => 'Ayuda',
        ];
    }
}
