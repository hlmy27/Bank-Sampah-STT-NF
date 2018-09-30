<?php

namespace frontend\modules\md\models;

use Yii;
use frontend\modules\Banksampah\models\TransaksiNasabah;
/**
 * This is the model class for table "transaksi_detail".
 *
 * @property int $id
 * @property int $transaksi_nasabah_id
 * @property int $kategori_sampah_id
 * @property double $qty
 * @property double $harga
 * @property string $created_at
 * @property string $updated_at
 * @property int $created_by
 * @property int $updated_by
 *
 * @property KategoriSampah $kategoriSampah
 * @property TransaksiNasabah $transaksiNasabah
 */
class TransaksiDetail extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksi_detail';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['transaksi_nasabah_id', 'kategori_sampah_id'], 'required'],
            [['transaksi_nasabah_id', 'kategori_sampah_id', 'created_by', 'updated_by'], 'integer'],
            [['qty', 'harga'], 'number'],
            [['created_at', 'updated_at'], 'safe'],
            [['kategori_sampah_id'], 'exist', 'skipOnError' => true, 'targetClass' => KategoriSampah::className(), 'targetAttribute' => ['kategori_sampah_id' => 'id']],
            [['transaksi_nasabah_id'], 'exist', 'skipOnError' => true, 'targetClass' => TransaksiNasabah::className(), 'targetAttribute' => ['transaksi_nasabah_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'transaksi_nasabah_id' => 'Transaksi Nasabah ID',
            'kategori_sampah_id' => 'Kategori Sampah ID',
            'qty' => 'Qty',
            'harga' => 'Harga',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
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
    public function getTransaksiNasabah()
    {
        return $this->hasOne(TransaksiNasabah::className(), ['id' => 'transaksi_nasabah_id']);
    }
}
