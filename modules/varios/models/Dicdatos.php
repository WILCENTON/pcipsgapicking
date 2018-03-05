<?php

namespace app\modules\varios\models;

use yii\db\ActiveRecord;

/**
 * This is the model class for table "dicdatos".
 *
 * @property string $vista
 * @property string $tabla
 * @property string $columna
 * @property integer $tipo
 * @property integer $longitud
 * @property integer $maxentrada
 * @property string $formato
 * @property string $defecto
 * @property string $etiqueta
 * @property string $etibreve
 * @property string $lista
 * @property string $valores
 * @property integer $tipocontrol
 * @property integer $requerido
 * @property integer $acceso
 * @property string $relacion
 * @property string $rel_columna
 * @property integer $rel_requerida
 * @property string $rel_descri
 * @property integer $nogrid
 * @property string $ayuda
 * @property integer $noquery
 * @property integer $nomante
 * @property integer $sololectura
 * @property integer $orden
 * @property integer $loncelda
 * @property integer $visible
 * @property integer $autonum
 * @property integer $fnbuscar
 */
class Dicdatos extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'dicdatos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['vista', 'columna'], 'required'],
            [['tipo', 'longitud', 'maxentrada', 'tipocontrol', 'requerido', 'acceso', 'rel_requerida', 'nogrid', 'noquery', 'nomante', 'sololectura', 'orden', 'loncelda', 'visible', 'autonum', 'fnbuscar'], 'integer'],
            [['vista', 'tabla', 'columna', 'relacion', 'rel_columna', 'rel_descri'], 'string', 'max' => 40],
            [['formato', 'defecto'], 'string', 'max' => 20],
            [['etiqueta', 'etibreve'], 'string', 'max' => 30],
            [['lista', 'valores'], 'string', 'max' => 254],
            [['ayuda'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'vista' => 'Vista',
            'tabla' => 'Tabla',
            'columna' => 'Columna',
            'tipo' => 'Tipo',
            'longitud' => 'Longitud',
            'maxentrada' => 'Maxentrada',
            'formato' => 'Formato',
            'defecto' => 'Defecto',
            'etiqueta' => 'Etiqueta',
            'etibreve' => 'Etibreve',
            'lista' => 'Lista',
            'valores' => 'Valores',
            'tipocontrol' => 'Tipocontrol',
            'requerido' => 'Requerido',
            'acceso' => 'Acceso',
            'relacion' => 'Relacion',
            'rel_columna' => 'Rel Columna',
            'rel_requerida' => 'Rel Requerida',
            'rel_descri' => 'Rel Descri',
            'nogrid' => 'Nogrid',
            'ayuda' => 'Ayuda',
            'noquery' => 'Noquery',
            'nomante' => 'Nomante',
            'sololectura' => 'Sololectura',
            'orden' => 'Orden',
            'loncelda' => 'Loncelda',
            'visible' => 'Visible',
            'autonum' => 'Autonum',
            'fnbuscar' => 'Fnbuscar',
        ];
    }
}
