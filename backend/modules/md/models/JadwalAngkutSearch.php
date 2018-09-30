<?php

namespace backend\modules\md\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\md\models\JadwalAngkut;

/**
 * JadwalAngkutSearch represents the model behind the search form of `backend\modules\md\models\JadwalAngkut`.
 */
class JadwalAngkutSearch extends JadwalAngkut
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'asal_id', 'tujuan_id', 'created_by', 'updated_by'], 'integer'],
            [['hari', 'jam', 'kode', 'nopol_kendaraan', 'created_at', 'updated_at'], 'safe'],
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
        $query = JadwalAngkut::find();

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
            'jam' => $this->jam,
            'asal_id' => $this->asal_id,
            'tujuan_id' => $this->tujuan_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'hari', $this->hari])
            ->andFilterWhere(['like', 'kode', $this->kode])
            ->andFilterWhere(['like', 'nopol_kendaraan', $this->nopol_kendaraan]);

        return $dataProvider;
    }
}
