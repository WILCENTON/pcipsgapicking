<?php

namespace app\modules\sgapicking\models;

use app\modules\sgapicking\models\SgaControlpedlec;
use app\modules\sgapicking\models\SgaJpedidoslin;
use app\modules\sgapicking\models\SgaJpedidosQuery;
use app\modules\sgapicking\models\SgaPicking;
use app\modules\sgapicking\models\SgaPickingped;
use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "sga_jpedidos".
 *
 * @property int $pedido
 * @property string $fecha
 * @property string $fechaser
 * @property string $horaser
 * @property int $prioridad 1=alta, 2=media, 3=baja
 * @property string $estado A=Alta, P=Parcial S=Servido B=Abortado
 * @property string $tipoped M=manual, I=importado
 * @property string $idpedido ID del pedido original del fichero
 * @property string $fechaped Fecha del pedido original del fichero
 * @property string $referencia Referencia del pedido original del cliente
 * @property string $obser
 * @property int $usernum
 * @property string $feactu
 *
 * @property SgaControlpedlec[] $sgaControlpedlecs
 * @property SgaJpedidoslin[] $sgaJpedidoslins
 * @property SgaPickingped[] $sgaPickingpeds
 * @property SgaPicking[] $pickings
 */
class SgaJpedidos extends ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'sga_jpedidos';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['pedido'], 'required'],
            [['pedido', 'prioridad', 'usernum'], 'integer'],
            [['fecha', 'fechaser', 'horaser', 'fechaped', 'feactu'], 'safe'],
            [['estado', 'tipoped'], 'string', 'max' => 1],
            [['idpedido'], 'string', 'max' => 15],
            [['referencia', 'obser'], 'string', 'max' => 60],
                //[['pedido'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'pedido' => 'Pedido',
            'fecha' => 'Fecha',
            'fechaser' => 'Fechaser',
            'horaser' => 'Horaser',
            'prioridad' => 'Prioridad',
            'estado' => 'Estado',
            'tipoped' => 'Tipoped',
            'idpedido' => 'Idpedido',
            'fechaped' => 'Fechaped',
            'referencia' => 'Referencia',
            'obser' => 'Obser',
            'usernum' => 'Usernum',
            'feactu' => 'Feactu',
        ];
    }

    public function beforeSave($insert) {
        if (!parent::beforeSave($insert)) {
            return false;
        }
        // ...custom code here... 
        if ($this->getIsNewRecord()) {
            if (($contadores = SgaContador::findOne(1)) !== null) {
                $contadores->updateCounters(['pedidoscli' => 1]);
                $this->pedido = $contadores->pedidoscli;
            } else {
                return false;
            }
        }
        return true;
    }

    public function beforeDelete() {
        if (!parent::beforeDelete()) {
            return false;
        }
        // eliminar pedido de picking
        $query = SgaPickingped::find()->where(['pedido' => $this->pedido]);
        $registros = $query->all();
        foreach ($registros as $reg) {
            $reg->delete();
        }

        // eliminar pedido de controlpedlec
        $query = SgaControlpedlec::find()->where(['pedido' => $this->pedido]);
        $registros = $query->all();
        foreach ($registros as $reg) {
            $reg->delete();
        }

        // eliminar lineas pedido de jpedidoslin
        $query = SgaJpedidoslin::find()->where(['pedido' => $this->pedido]);
        $registros = $query->all();
        foreach ($registros as $reg) {
            $reg->delete();
        }
        return true;
    }

    /**
     * @return ActiveQuery
     */
    public function getSgaControlpedlecs() {
        return $this->hasMany(SgaControlpedlec::className(), ['pedido' => 'pedido']);
    }

    /**
     * @return ActiveQuery
     */
    public function getSgaJpedidoslins() {
        return $this->hasMany(SgaJpedidoslin::className(), ['pedido' => 'pedido']);
    }

    /**
     * @return ActiveQuery
     */
    public function getSgaPickingpeds() {
        return $this->hasMany(SgaPickingped::className(), ['pedido' => 'pedido']);
    }

    /**
     * @return ActiveQuery
     */
    public function getPickings() {
        return $this->hasMany(SgaPicking::className(), ['picking' => 'picking'])->viaTable('sga_pickingped', ['pedido' => 'pedido']);
    }

    /**
     * @inheritdoc
     * @return SgaJpedidosQuery the active query used by this AR class.
     */
    public static function find() {
        return new SgaJpedidosQuery(get_called_class());
    }

}
