<?php

namespace app\modules\sgapicking\models;

use Yii;

/**
 * This is the model class for table "sga_jpedidoslin".
 *
 * @property string $codpedido pedido -  linea
 * @property int $pedido
 * @property int $linea
 * @property string $articulo
 * @property string $nombre
 * @property string $ubicacion
 * @property string $cantidad
 * @property string $servido
 * @property string $estado P=Pendiente S=Servido
 * @property string $existencia
 * @property string $almapro
 * @property string $estadopedido
 * @property string $idpedido
 * @property string $fcompra
 * @property string $tipopedido
 * @property string $codbarras
 *
 * @property SgaJpedidos $pedido0
 * @property SgaPickinglec[] $sgaPickinglecs
 * @property SgaPickinglin[] $sgaPickinglins
 * @property SgaPicking[] $pickings
 */
class SgaJpedidoslin extends \yii\db\ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'sga_jpedidoslin';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['codpedido'], 'required'],
            [['pedido', 'linea'], 'integer'],
            [['cantidad', 'servido', 'existencia'], 'number'],
            [['fcompra'], 'safe'],
            [['codpedido', 'articulo', 'ubicacion', 'estadopedido', 'codbarras'], 'string', 'max' => 20],
            [['nombre'], 'string', 'max' => 50],
            [['estado'], 'string', 'max' => 1],
            [['almapro'], 'string', 'max' => 5],
            [['idpedido'], 'string', 'max' => 15],
            [['tipopedido'], 'string', 'max' => 10],
            [['codpedido'], 'unique'],
            [['pedido'], 'exist', 'skipOnError' => true, 'targetClass' => SgaJpedidos::className(), 'targetAttribute' => ['pedido' => 'pedido']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'codpedido' => 'Codpedido',
            'pedido' => 'Pedido',
            'linea' => 'Linea',
            'articulo' => 'Articulo',
            'nombre' => 'Nombre',
            'ubicacion' => 'Ubicacion',
            'cantidad' => 'Cantidad',
            'servido' => 'Servido',
            'estado' => 'Estado',
            'existencia' => 'Existencia',
            'almapro' => 'Almapro',
            'estadopedido' => 'Estadopedido',
            'idpedido' => 'Idpedido',
            'fcompra' => 'Fcompra',
            'tipopedido' => 'Tipopedido',
            'codbarras' => 'Codbarras',
        ];
    }

    public function beforeSave($insert) {
        if (!parent::beforeSave($insert)) {
            return false;
        }
        // ...custom code here... 
        if ($this->getIsNewRecord()) {
            $max = $this->find() // AQ instance
                    ->select('max(linea)')
                    ->where(['pedido' => $this->pedido])
                    ->scalar();
            $this->linea = $max + 1;
        }
        $this->codpedido = $this->pedido . "-" . $this->linea;
        return true;
    }

    public function beforeDelete() {
        if (!parent::beforeDelete()) {
            return false;
        }
        // eliminar lineas pickinglin
        $query = SgaPickinglin::find()->where(['codpedido' => $this->codpedido]);
        $registros = $query->all();
        foreach ($registros as $reg) {
            $reg->delete();
        }

        // eliminar lineas pickinglinlec
        $query = SgaPickinglec::find()->where(['codpedido' => $this->codpedido]);
        $registros = $query->all();
        foreach ($registros as $reg) {
            $reg->delete();
        }
        return true;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPedido0() {
        return $this->hasOne(SgaJpedidos::className(), ['pedido' => 'pedido']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSgaPickinglecs() {
        return $this->hasMany(SgaPickinglec::className(), ['codpedido' => 'codpedido']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSgaPickinglins() {
        return $this->hasMany(SgaPickinglin::className(), ['codpedido' => 'codpedido']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPickings() {
        return $this->hasMany(SgaPicking::className(), ['picking' => 'picking'])->viaTable('sga_pickinglin', ['codpedido' => 'codpedido']);
    }

    /**
     * @inheritdoc
     * @return SgaJpedidoslinQuery the active query used by this AR class.
     */
    public static function find() {
        return new SgaJpedidoslinQuery(get_called_class());
    }

}
