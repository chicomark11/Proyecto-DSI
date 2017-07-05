<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\tipoconvenio;

/**
 * tipoconvenioSearch represents the model behind the search form about `app\models\tipoconvenio`.
 */
class tipoconvenioSearch extends tipoconvenio
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_TIPO_CONVENIO'], 'integer'],
            [['NOMBRE'], 'safe'],
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
        $query = tipoconvenio::find();

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
            'ID_TIPO_CONVENIO' => $this->ID_TIPO_CONVENIO,
        ]);

        $query->andFilterWhere(['like', 'NOMBRE', $this->NOMBRE]);

        return $dataProvider;
    }
}
