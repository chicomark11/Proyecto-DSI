<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Objetivoconvenio;

/**
 * ObjetivoconvenioSearch represents the model behind the search form about `app\models\Objetivoconvenio`.
 */
class ObjetivoconvenioSearch extends Objetivoconvenio
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_OBJETIVO', 'ID_CONVENIO'], 'integer'],
            [['DESCRIPCION'], 'safe'],
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
        $query = Objetivoconvenio::find();

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
            'ID_OBJETIVO' => $this->ID_OBJETIVO,
            'ID_CONVENIO' => $this->ID_CONVENIO,
        ]);

        $query->andFilterWhere(['like', 'DESCRIPCION', $this->DESCRIPCION]);

        return $dataProvider;
    }
}
