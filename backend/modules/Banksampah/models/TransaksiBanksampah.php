<?php

namespace backend\modules\Banksampah\models;

use Yii;
use backend\modules\md\models\KategoriTransaksi;
use backend\modules\md\models\Lembaga;
use backend\modules\md\models\Kendaraan;
/**
 * This is the model class for table "transaksi_banksampah".
 *
 * @property int $id
 * @property int $banksampah_id
 * @property string $tanggal
 * @property string $keterangan
 * @property double $nilai
 * @property string $created_at
 * @property string $updated_at
 * @property int $created_by
 * @property int $updated_by
 * @property int $kendaraan_id
 * @property int $pengepul_id
 * @property int $status
 * @property int $kategori_transaksi_id
 *
 * @property KategoriTransaksi $kategoriTransaksi
 * @property Kendaraan $kendaraan
 * @property Lembaga $banksampah
 * @property Lembaga $pengepul
 * @property TransdetailBanksampah[] $transdetailBanksampahs
 */
class TransaksiBanksampah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaksi_banksampah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['banksampah_id', 'kendaraan_id', 'pengepul_id', 'kategori_transaksi_id'], 'required'],
            [['banksampah_id', 'created_by', 'updated_by', 'kendaraan_id', 'pengepul_id', 'status', 'kategori_transaksi_id'], 'integer'],
            [['tanggal', 'created_at', 'updated_at'], 'safe'],
            [['nilai'], 'number'],
            [['keterangan'], 'string', 'max' => 45],
            [['kategori_transaksi_id'], 'exist', 'skipOnError' => true, 'targetClass' => KategoriTransaksi::className(), 'targetAttribute' => ['kategori_transaksi_id' => 'id']],
            [['kendaraan_id'], 'exist', 'skipOnError' => true, 'targetClass' => Kendaraan::className(), 'targetAttribute' => ['kendaraan_id' => 'id']],
            [['banksampah_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lembaga::className(), 'targetAttribute' => ['banksampah_id' => 'id']],
            [['pengepul_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lembaga::className(), 'targetAttribute' => ['pengepul_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'banksampah_id' => 'Banksampah ID',
            'tanggal' => 'Tanggal',
            'keterangan' => 'Keterangan',
            'nilai' => 'Nilai',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'kendaraan_id' => 'Kendaraan ID',
            'pengepul_id' => 'Pengepul ID',
            'status' => 'Status',
            'kategori_transaksi_id' => 'Kategori Transaksi ID',
        ];
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
    public function getKendaraan()
    {
        return $this->hasOne(Kendaraan::className(), ['id' => 'kendaraan_id']);
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
    public function getPengepul()
    {
        return $this->hasOne(Lembaga::className(), ['id' => 'pengepul_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransdetailBanksampahs()
    {
        return $this->hasMany(TransdetailBanksampah::className(), ['transaksi_id' => 'id']);
    }
}
