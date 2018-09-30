<?php

namespace frontend\modules\md\models;

use Yii;

/**
 * This is the model class for table "kategori_transaksi".
 *
 * @property int $id
 * @property string $nama
 *
 * @property TransaksiBanksampah[] $transaksiBanksampahs
 * @property TransaksiNasabah[] $transaksiNasabahs
 */
class KategoriTransaksi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kategori_transaksi';
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
    public function getTransaksiBanksampahs()
    {
        return $this->hasMany(TransaksiBanksampah::className(), ['kategori_transaksi_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksiNasabahs()
    {
        return $this->hasMany(TransaksiNasabah::className(), ['kategori_transaksi_id' => 'id']);
    }
}
