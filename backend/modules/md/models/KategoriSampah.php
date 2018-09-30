<?php

namespace backend\modules\md\models;

use Yii;

/**
 * This is the model class for table "kategori_sampah".
 *
 * @property int $id
 * @property string $nama
 *
 * @property TarifBanksampah[] $tarifBanksampahs
 * @property TransaksiDetail[] $transaksiDetails
 * @property TransdetailBanksampah[] $transdetailBanksampahs
 */
class KategoriSampah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kategori_sampah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTarifBanksampahs()
    {
        return $this->hasMany(TarifBanksampah::className(), ['kategori_sampah_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksiDetails()
    {
        return $this->hasMany(TransaksiDetail::className(), ['kategori_sampah_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransdetailBanksampahs()
    {
        return $this->hasMany(TransdetailBanksampah::className(), ['kategori_sampah_id' => 'id']);
    }
}
