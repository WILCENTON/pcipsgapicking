<?php

namespace app\modules\sgapicking\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * SgaOperariosSearch represents the model behind the search form of `app\modules\sgapicking\models\SgaOperarios`.
 */
class SgaOperariosSearch extends SgaOperarios {

    /**
     * @inheritdoc
     */
    public function rules() {
        return [
            [['operario', 'almacen'], 'integer'],
            [['nombre', 'movil', 'email', 'estado', 'codexterno'], 'safe'],
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
        $query = SgaOperarios::find();

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
            'operario' => $this->operario,
            'almacen' => $this->almacen,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
                ->andFilterWhere(['like', 'movil', $this->movil])
                ->andFilterWhere(['like', 'email', $this->email])
                ->andFilterWhere(['like', 'estado', $this->estado])
                ->andFilterWhere(['like', 'codexterno', $this->codexterno]);

        return $dataProvider;
    }

}
