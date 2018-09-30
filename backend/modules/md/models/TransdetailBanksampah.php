<?php

namespace backend\modules\md\models;

use Yii;
use backend\modules\Banksampah\models\TransaksiBanksampah;

/**
 * This is the model class for table "transdetail_banksampah".
 *
 * @property int $id
 * @property int $kategori_sampah_id
 * @property double $qty
 * @property double $harga
 * @property int $transaksi_id
 * @property string $created_at
 * @property string $updated_at
 * @property int $created_byl
 * @property int $updated_by
 *
 * @property KategoriSampah $kategoriSampah
 * @property TransaksiBanksampah $transaksi
 */
class TransdetailBanksampah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transdetail_banksampah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kategori_sampah_id', 'transaksi_id'], 'required'],
            [['kategori_sampah_id', 'transaksi_id', 'created_byl', 'updated_by'], 'integer'],
            [['qty', 'harga'], 'number'],
            [['created_at', 'updated_at'], 'safe'],
            [['kategori_sampah_id'], 'exist', 'skipOnError' => true, 'targetClass' => KategoriSampah::className(), 'targetAttribute' => ['kategori_sampah_id' => 'id']],
            [['transaksi_id'], 'exist', 'skipOnError' => true, 'targetClass' => TransaksiBanksampah::className(), 'targetAttribute' => ['transaksi_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kategori_sampah_id' => 'Kategori Sampah ID',
            'qty' => 'Qty',
            'harga' => 'Harga',
            'transaksi_id' => 'Transaksi ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_byl' => 'Created Byl',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKategoriSampah()
    {
        return $this->hasOne(KategoriSampah::className(), ['id' => 'kategori_sampah_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksi()
    {
        return $this->hasOne(TransaksiBanksampah::className(), ['id' => 'transaksi_id']);
    }
}
