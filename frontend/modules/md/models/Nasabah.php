<?php

namespace frontend\modules\md\models;

use Yii;

/**
 * This is the model class for table "nasabah".
 *
 * @property int $id
 * @property string $nomor
 * @property int $user_id
 * @property string $nama_lengkap
 * @property string $hp
 * @property string $alamat
 * @property string $rt
 * @property string $rw
 * @property string $kelurahan_id
 * @property int $created_by
 * @property int $updated_by
 * @property string $created_at
 * @property string $updated_at
 * @property double $saldo
 *
 * @property NasabahBanksampah[] $nasabahBanksampahs
 * @property TransaksiNasabah[] $transaksiNasabahs
 */
class Nasabah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nasabah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'created_by', 'updated_by'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['saldo'], 'number'],
            [['nomor', 'hp'], 'string', 'max' => 20],
            [['nama_lengkap', 'rt', 'rw'], 'string', 'max' => 45],
            [['alamat'], 'string', 'max' => 100],
            [['kelurahan_id'], 'string', 'max' => 10],
            [['nomor'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nomor' => 'Nomor',
            'user_id' => 'User ID',
            'nama_lengkap' => 'Nama Lengkap',
            'hp' => 'Hp',
            'alamat' => 'Alamat',
            'rt' => 'Rt',
            'rw' => 'Rw',
            'kelurahan_id' => 'Kelurahan ID',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'saldo' => 'Saldo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNasabahBanksampahs()
    {
        return $this->hasMany(NasabahBanksampah::className(), ['nasabah_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksiNasabahs()
    {
        return $this->hasMany(TransaksiNasabah::className(), ['nasabah_id' => 'id']);
    }
}
