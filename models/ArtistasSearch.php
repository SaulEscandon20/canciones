<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Artistas;

/**
 * ArtistasSearch represents the model behind the search form of `app\models\Artistas`.
 */
class ArtistasSearch extends Artistas
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'edad'], 'integer'],
            [['artista', 'nacionalidad', 'genero'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Artistas::find();

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
            'id' => $this->id,
            'edad' => $this->edad,
        ]);

        $query->andFilterWhere(['like', 'artista', $this->artista])
            ->andFilterWhere(['like', 'nacionalidad', $this->nacionalidad])
            ->andFilterWhere(['like', 'genero', $this->genero]);

        return $dataProvider;
    }
}
