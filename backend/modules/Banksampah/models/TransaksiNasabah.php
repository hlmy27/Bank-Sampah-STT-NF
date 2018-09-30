<?php

namespace backend\modules\Banksampah\models;

use Yii;
use backend\modules\md\models\KategoriTransaksi;
use backend\modules\md\models\Lembaga;
use backend\modules\md\models\Nasabah;
/**
 * This is the model class for table "transaksi_nasabah".
 *
 * @property int $id
 * @property int $nasabah_id
 * @property int $banksampah_id
 * @property double $nilai
 * @property string $created_at
 * @property string $updated_at
 * @property int $created_by
 * @property int $updated_by
 * @property string $keterangan
 * @property int $kategori_transaksi_id
 * @property string $tanggal
 *
 * @property TransaksiDetail[] $transaksiDetails
 * @property KategoriTransaksi $kategoriTransaksi
 * @property Lembaga $banksampah
 * @property Nasabah $nasabah
 */
class TransaksiNasabah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksi_nasabah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nasabah_id', 'banksampah_id', 'kategori_transaksi_id'], 'required'],
            [['nasabah_id', 'banksampah_id', 'created_by', 'updated_by', 'kategori_transaksi_id'], 'integer'],
            [['nilai'], 'number'],
            [['created_at', 'updated_at', 'tanggal'], 'safe'],
            [['keterangan'], 'string', 'max' => 45],
            [['kategori_transaksi_id'], 'exist', 'skipOnError' => true, 'targetClass' => KategoriTransaksi::className(), 'targetAttribute' => ['kategori_transaksi_id' => 'id']],
            [['banksampah_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lembaga::className(), 'targetAttribute' => ['banksampah_id' => 'id']],
            [['nasabah_id'], 'exist', 'skipOnError' => true, 'targetClass' => Nasabah::className(), 'targetAttribute' => ['nasabah_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nasabah_id' => 'Nasabah ID',
            'banksampah_id' => 'Banksampah ID',
            'nilai' => 'Nilai',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'keterangan' => 'Keterangan',
            'kategori_transaksi_id' => 'Kategori Transaksi ID',
            'tanggal' => 'Tanggal',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksiDetails()
    {
        return $this->hasMany(TransaksiDetail::className(), ['transaksi_nasabah_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKategoriTransaksi()
    {
        return $this->hasOne(KategoriTransaksi::className(), ['id' => 'kategori_transaksi_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getBanksampah()
    {
        return $this->hasOne(Lembaga::className(), ['id' => 'banksampah_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNasabah()
    {
        return $this->hasOne(Nasabah::className(), ['id' => 'nasabah_id']);
    }
}
