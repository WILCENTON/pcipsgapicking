<?php

namespace app\modules\sgapicking\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\sgapicking\models\SgaJpedidoslin;

/**
 * SgaJpedidoslinSearch represents the model behind the search form of `app\modules\sgapicking\models\SgaJpedidoslin`.
 */
class SgaJpedidoslinSearch extends SgaJpedidoslin
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codpedido', 'articulo', 'nombre', 'ubicacion', 'estado', 'almapro', 'estadopedido', 'idpedido', 'fcompra', 'tipopedido', 'codbarras'], 'safe'],
            [['pedido', 'linea'], 'integer'],
            [['cantidad', 'servido', 'existencia'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
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
    public function search($params)
    {
        $query = SgaJpedidoslin::find();

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
            'linea' => $this->linea,
            'cantidad' => $this->cantidad,
            'servido' => $this->servido,
            'existencia' => $this->existencia,
            'fcompra' => $this->fcompra,
        ]);

        $query->andFilterWhere(['like', 'codpedido', $this->codpedido])
            ->andFilterWhere(['like', 'articulo', $this->articulo])
            ->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'ubicacion', $this->ubicacion])
            ->andFilterWhere(['like', 'estado', $this->estado])
            ->andFilterWhere(['like', 'almapro', $this->almapro])
            ->andFilterWhere(['like', 'estadopedido', $this->estadopedido])
            ->andFilterWhere(['like', 'idpedido', $this->idpedido])
            ->andFilterWhere(['like', 'tipopedido', $this->tipopedido])
            ->andFilterWhere(['like', 'codbarras', $this->codbarras]);

        return $dataProvider;
    }
}
