<?php

namespace backend\modules\md\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\md\models\TransaksiBanksampah;

/**
 * TransaksiBanksampahSearch represents the model behind the search form of `backend\modules\md\models\TransaksiBanksampah`.
 */
class TransaksiBanksampahSearch extends TransaksiBanksampah
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'banksampah_id', 'created_by', 'updated_by', 'kendaraan_id', 'pengepul_id', 'status', 'kategori_transaksi_id'], 'integer'],
            [['tanggal', 'keterangan', 'created_at', 'updated_at'], 'safe'],
            [['nilai'], 'number'],
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
        $query = TransaksiBanksampah::find();

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
            'banksampah_id' => $this->banksampah_id,
            'tanggal' => $this->tanggal,
            'nilai' => $this->nilai,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'kendaraan_id' => $this->kendaraan_id,
            'pengepul_id' => $this->pengepul_id,
            'status' => $this->status,
            'kategori_transaksi_id' => $this->kategori_transaksi_id,
        ]);

        $query->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
