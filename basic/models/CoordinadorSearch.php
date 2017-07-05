<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Coordinador;

/**
 * CoordinadorSearch represents the model behind the search form about `app\models\Coordinador`.
 */
class CoordinadorSearch extends Coordinador
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_COORDINADOR'], 'integer'],
            [['RUT_COORDINADOR', 'NOMBRE_COORDINADOR', 'EMAIL', 'TELEFONO', 'DIRECCION'], 'safe'],
            [['VIGENCIA'], 'boolean'],
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
        $query = Coordinador::find();

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
            'ID_COORDINADOR' => $this->ID_COORDINADOR,
            'VIGENCIA' => $this->VIGENCIA,
        ]);

        $query->andFilterWhere(['like', 'RUT_COORDINADOR', $this->RUT_COORDINADOR])
            ->andFilterWhere(['like', 'NOMBRE_COORDINADOR', $this->NOMBRE_COORDINADOR])
            ->andFilterWhere(['like', 'EMAIL', $this->EMAIL])
            ->andFilterWhere(['like', 'TELEFONO', $this->TELEFONO])
            ->andFilterWhere(['like', 'DIRECCION', $this->DIRECCION]);

        return $dataProvider;
    }
}
