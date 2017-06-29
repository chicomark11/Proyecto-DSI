<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Convenio;

/**
 * ConvenioSearch represents the model behind the search form about `app\models\Convenio`.
 */
class ConvenioSearch extends Convenio
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_CONVENIO', 'ID_COORDINADOR', 'ID_TIPO_CONVENIO', 'ID_ESTADO_CONVENIO'], 'integer'],
            [['NOMBRE_CONVENIO', 'FECHA_INICIO', 'FECHA_TERMINO', 'DESCRIPCION'], 'safe'],
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
        $query = Convenio::find();

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
            'ID_CONVENIO' => $this->ID_CONVENIO,
            'ID_COORDINADOR' => $this->ID_COORDINADOR,
            'ID_TIPO_CONVENIO' => $this->ID_TIPO_CONVENIO,
            'ID_ESTADO_CONVENIO' => $this->ID_ESTADO_CONVENIO,
            'FECHA_INICIO' => $this->FECHA_INICIO,
            'FECHA_TERMINO' => $this->FECHA_TERMINO,
            'VIGENCIA' => $this->VIGENCIA,
        ]);

        $query->andFilterWhere(['like', 'NOMBRE_CONVENIO', $this->NOMBRE_CONVENIO])
            ->andFilterWhere(['like', 'DESCRIPCION', $this->DESCRIPCION]);

        return $dataProvider;
    }
}
