<?php

namespace app\modules\sgapicking\models;

use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "sga_pickingped".
 *
 * @property int $picking
 * @property int $pedido
 * @property string $descripcion
 *
 * @property SgaPicking $picking0
 * @property SgaJpedidos $pedido0
 */
class SgaPickingped extends ActiveRecord {

    /**
     * @inheritdoc
     */
    public static function tableName() {
        return 'sga_pickingped';
    }

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['picking', 'pedido'], 'required'],
            [['picking', 'pedido'], 'integer'],
            [['descripcion'], 'string', 'max' => 20],
            [['picking', 'pedido'], 'unique', 'targetAttribute' => ['picking', 'pedido']],
            [['picking'], 'exist', 'skipOnError' => true, 'targetClass' => SgaPicking::className(), 'targetAttribute' => ['picking' => 'picking']],
            [['pedido'], 'exist', 'skipOnError' => true, 'targetClass' => SgaJpedidos::className(), 'targetAttribute' => ['pedido' => 'pedido']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels() {
        return [
            'picking' => 'Picking',
            'pedido' => 'Pedido',
            'descripcion' => 'Descripcion',
        ];
    }

    public function beforeDelete() {
        if (!parent::beforeDelete()) {
            return false;
        }
        // encontrar las lineas de un pedido     
        $lista = SgaJpedidoslin::find()
                ->where(['pedido' => $this->pedido])
                ->select('codpedido')
                ->all();

        // eliminar lineas pickinglin
        $query = SgaPickinglin::find()->where(['in', 'codpedido', $lista]);
        $registros = $query->all();
        foreach ($registros as $reg) {
            $reg->delete();
        }

        // eliminar lineas pickinglinlec
        $query = SgaPickinglec::find()->where(['in', 'codpedido', $lista]);
        $registros = $query->all();
        foreach ($registros as $reg) {
            $reg->delete();
        }
        return true;
    }

    /**
     * @return ActiveQuery
     */
    public function getPicking0() {
        return $this->hasOne(SgaPicking::className(), ['picking' => 'picking']);
    }

    /**
     * @return ActiveQuery
     */
    public function getPedido0() {
        return $this->hasOne(SgaJpedidos::className(), ['pedido' => 'pedido']);
    }

    /**
     * @inheritdoc
     * @return SgaPickingpedQuery the active query used by this AR class.
     */
    public static function find() {
        return new SgaPickingpedQuery(get_called_class());
    }

}
