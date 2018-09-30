<?php

namespace frontend\modules\md\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\md\models\TransdetailBanksampah;

/**
 * TransdetailBanksampahSearch represents the model behind the search form of `frontend\modules\md\models\TransdetailBanksampah`.
 */
class TransdetailBanksampahSearch extends TransdetailBanksampah
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'kategori_sampah_id', 'transaksi_id', 'created_byl', 'updated_by'], 'integer'],
            [['qty', 'harga'], 'number'],
            [['created_at', 'updated_at'], 'safe'],
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
        $query = TransdetailBanksampah::find();

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
            'kategori_sampah_id' => $this->kategori_sampah_id,
            'qty' => $this->qty,
            'harga' => $this->harga,
            'transaksi_id' => $this->transaksi_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'created_byl' => $this->created_byl,
            'updated_by' => $this->updated_by,
        ]);

        return $dataProvider;
    }
}
