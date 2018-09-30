<?php

namespace frontend\modules\Banksampah\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\modules\Banksampah\models\TarifBanksampah;

/**
 * TarifBanksampahSearch represents the model behind the search form of `frontend\modules\Banksampah\models\TarifBanksampah`.
 */
class TarifBanksampahSearch extends TarifBanksampah
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'kategori_sampah_id', 'lembaga_id', 'created_by', 'updated_by'], 'integer'],
            [['harga_kilo'], 'number'],
            [['created_at', 'updated_ata'], 'safe'],
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
        $query = TarifBanksampah::find();

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
            'lembaga_id' => $this->lembaga_id,
            'harga_kilo' => $this->harga_kilo,
            'created_at' => $this->created_at,
            'updated_ata' => $this->updated_ata,
            'created_by' => $this->created_by,
            'updated_by' => $this->updated_by,
        ]);

        return $dataProvider;
    }
}
