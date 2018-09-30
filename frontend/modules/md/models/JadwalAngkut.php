<?php

namespace frontend\modules\md\models;

use Yii;

/**
 * This is the model class for table "jadwal_angkut".
 *
 * @property int $id
 * @property string $hari
 * @property string $jam
 * @property string $kode
 * @property int $asal_id
 * @property int $tujuan_id
 * @property string $nopol_kendaraan
 * @property string $created_at
 * @property string $updated_at
 * @property int $created_by
 * @property int $updated_by
 *
 * @property Lembaga $asal
 * @property Lembaga $tujuan
 */
class JadwalAngkut extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jadwal_angkut';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jam', 'created_at', 'updated_at'], 'safe'],
            [['asal_id', 'tujuan_id'], 'required'],
            [['asal_id', 'tujuan_id', 'created_by', 'updated_by'], 'integer'],
            [['hari', 'kode'], 'string', 'max' => 10],
            [['nopol_kendaraan'], 'string', 'max' => 15],
            [['kode'], 'unique'],
            [['asal_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lembaga::className(), 'targetAttribute' => ['asal_id' => 'id']],
            [['tujuan_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lembaga::className(), 'targetAttribute' => ['tujuan_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'hari' => 'Hari',
            'jam' => 'Jam',
            'kode' => 'Kode',
            'asal_id' => 'Asal ID',
            'tujuan_id' => 'Tujuan ID',
            'nopol_kendaraan' => 'Nopol Kendaraan',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAsal()
    {
        return $this->hasOne(Lembaga::className(), ['id' => 'asal_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTujuan()
    {
        return $this->hasOne(Lembaga::className(), ['id' => 'tujuan_id']);
    }
}
