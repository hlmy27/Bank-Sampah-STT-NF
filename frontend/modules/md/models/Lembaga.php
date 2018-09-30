<?php

namespace frontend\modules\md\models;

use Yii;

/**
 * This is the model class for table "lembaga".
 *
 * @property int $id
 * @property string $kode
 * @property string $nama
 * @property string $pemilik
 * @property string $alamat
 * @property string $rt
 * @property string $rw
 * @property string $kodepos
 * @property string $kelurahan_id
 * @property double $latitude
 * @property double $longitude
 * @property string $telpon
 * @property int $user_id
 * @property int $kategori_id
 * @property string $created_at
 * @property string $updated_at
 * @property int $created_by
 * @property int $updated_by
 * @property int $pengepul_id
 *
 * @property JadwalAngkut[] $jadwalAngkuts
 * @property JadwalAngkut[] $jadwalAngkuts0
 * @property Kategori $kategori
 * @property NasabahBanksampah[] $nasabahBanksampahs
 * @property TarifBanksampah[] $tarifBanksampahs
 * @property TransaksiBanksampah[] $transaksiBanksampahs
 * @property TransaksiBanksampah[] $transaksiBanksampahs0
 * @property TransaksiNasabah[] $transaksiNasabahs
 */
class Lembaga extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'lembaga';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['latitude', 'longitude'], 'number'],
            [['user_id', 'kategori_id', 'created_by', 'updated_by', 'pengepul_id'], 'integer'],
            [['kategori_id'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['kode', 'telpon'], 'string', 'max' => 20],
            [['nama', 'pemilik', 'alamat'], 'string', 'max' => 45],
            [['rt', 'rw'], 'string', 'max' => 2],
            [['kodepos'], 'string', 'max' => 5],
            [['kelurahan_id'], 'string', 'max' => 10],
            [['kategori_id'], 'exist', 'skipOnError' => true, 'targetClass' => Kategori::className(), 'targetAttribute' => ['kategori_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kode' => 'Kode',
            'nama' => 'Nama',
            'pemilik' => 'Pemilik',
            'alamat' => 'Alamat',
            'rt' => 'Rt',
            'rw' => 'Rw',
            'kodepos' => 'Kodepos',
            'kelurahan_id' => 'Kelurahan ID',
            'latitude' => 'Latitude',
            'longitude' => 'Longitude',
            'telpon' => 'Telpon',
            'user_id' => 'User ID',
            'kategori_id' => 'Kategori ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'pengepul_id' => 'Pengepul ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJadwalAngkuts()
    {
        return $this->hasMany(JadwalAngkut::className(), ['asal_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getJadwalAngkuts0()
    {
        return $this->hasMany(JadwalAngkut::className(), ['tujuan_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKategori()
    {
        return $this->hasOne(Kategori::className(), ['id' => 'kategori_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNasabahBanksampahs()
    {
        return $this->hasMany(NasabahBanksampah::className(), ['banksampah_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTarifBanksampahs()
    {
        return $this->hasMany(TarifBanksampah::className(), ['lembaga_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksiBanksampahs()
    {
        return $this->hasMany(TransaksiBanksampah::className(), ['banksampah_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksiBanksampahs0()
    {
        return $this->hasMany(TransaksiBanksampah::className(), ['pengepul_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksiNasabahs()
    {
        return $this->hasMany(TransaksiNasabah::className(), ['banksampah_id' => 'id']);
    }
}
