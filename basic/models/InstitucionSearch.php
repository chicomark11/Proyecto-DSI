<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Institucion;

/**
 * InstitucionSearch represents the model behind the search form about `app\models\Institucion`.
 */
class InstitucionSearch extends Institucion
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID_INSTITUCION'], 'integer'],
            [['NOMBRE_INSTITUCION', 'TIPO_INSTITUCION', 'PAIS', 'DIRECCION', 'TELEFONO', 'EMAIL', 'LINK'], 'safe'],
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
        $query = Institucion::find();

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
            'ID_INSTITUCION' => $this->ID_INSTITUCION,
            'VIGENCIA' => $this->VIGENCIA,
        ]);

        $query->andFilterWhere(['like', 'NOMBRE_INSTITUCION', $this->NOMBRE_INSTITUCION])
            ->andFilterWhere(['like', 'TIPO_INSTITUCION', $this->TIPO_INSTITUCION])
            ->andFilterWhere(['like', 'PAIS', $this->PAIS])
            ->andFilterWhere(['like', 'DIRECCION', $this->DIRECCION])
            ->andFilterWhere(['like', 'TELEFONO', $this->TELEFONO])
            ->andFilterWhere(['like', 'EMAIL', $this->EMAIL])
            ->andFilterWhere(['like', 'LINK', $this->LINK]);

        return $dataProvider;
    }
}
