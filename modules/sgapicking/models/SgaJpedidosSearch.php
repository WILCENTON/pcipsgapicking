<?php

namespace app\modules\sgapicking\models;

use app\modules\sgapicking\models\SgaJpedidos;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * SgaJpedidosSearch represents the model behind the search form of `app\modules\sgapicking\models\SgaJpedidos`.
 */
class SgaJpedidosSearch extends SgaJpedidos {

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['pedido', 'prioridad', 'usernum'], 'integer'],
            [['fecha', 'fechaser', 'horaser', 'estado', 'tipoped', 'idpedido', 'fechaped', 'referencia', 'obser', 'feactu'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios() {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params) {
        $query = SgaJpedidos::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'pedido' => $this->pedido,
            'fecha' => $this->fecha,
            //'fechaser' => $this->fechaser,
            //'horaser' => $this->horaser,
            'prioridad' => $this->prioridad,
            //'fechaped' => $this->fechaped,
            //'usernum' => $this->usernum,
            //'feactu' => $this->feactu,
        ]);

        $query->andFilterWhere(['like', 'estado', $this->estado])
                ->andFilterWhere(['like', 'tipoped', $this->tipoped])
                ->andFilterWhere(['like', 'idpedido', $this->idpedido])
                ->andFilterWhere(['like', 'referencia', $this->referencia])
                ->andFilterWhere(['like', 'obser', $this->obser]);

        return $dataProvider;
    }

}
