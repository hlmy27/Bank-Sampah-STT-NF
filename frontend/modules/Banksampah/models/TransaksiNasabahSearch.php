<?php

namespace frontend\modules\Banksampah\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\Banksampah\models\TransaksiNasabah;

/**
 * TransaksiNasabahSearch represents the model behind the search form of `frontend\modules\Banksampah\models\TransaksiNasabah`.
 */
class TransaksiNasabahSearch extends TransaksiNasabah
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nasabah_id', 'banksampah_id', 'created_by', 'updated_by', 'kategori_transaksi_id'], 'integer'],
            [['nilai'], 'number'],
            [['created_at', 'updated_at', 'keterangan', 'tanggal'], 'safe'],
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
        $query = TransaksiNasabah::find();

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
            'nasabah_id' => $this->nasabah_id,
            'banksampah_id' => $this->banksampah_id,
            'nilai' => $this->nilai,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
            'kategori_transaksi_id' => $this->kategori_transaksi_id,
            'tanggal' => $this->tanggal,
        ]);

        $query->andFilterWhere(['like', 'keterangan', $this->keterangan]);

        return $dataProvider;
    }
}
