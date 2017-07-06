<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Aconvenio;

/**
 * AconvenioSearch represents the model behind the search form about `app\models\Aconvenio`.
 */
class AconvenioSearch extends Aconvenio
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_ACTIVIDAD', 'ID_CONVENIO'], 'integer'],
            [['FECHA_INICIO', 'FECHA_FIN', 'DESCRIPCION'], 'safe'],
            [['VIGENTE'], 'boolean'],
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
        $query = Aconvenio::find();

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
            'ID_ACTIVIDAD' => $this->ID_ACTIVIDAD,
            'ID_CONVENIO' => $this->ID_CONVENIO,
            'FECHA_INICIO' => $this->FECHA_INICIO,
            'FECHA_FIN' => $this->FECHA_FIN,
            'VIGENTE' => $this->VIGENTE,
        ]);

        $query->andFilterWhere(['like', 'DESCRIPCION', $this->DESCRIPCION]);

        return $dataProvider;
    }
}
