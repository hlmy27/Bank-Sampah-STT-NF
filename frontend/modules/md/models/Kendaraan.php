<?php

namespace frontend\modules\md\models;

use Yii;

/**
 * This is the model class for table "kendaraan".
 *
 * @property int $id
 * @property string $kode
 * @property string $nama
 * @property double $kapasitas
 * @property string $nopol
 * @property string $created_at
 * @property string $updated_at
 * @property int $created_by
 * @property int $updated_by
 *
 * @property TransaksiBanksampah[] $transaksiBanksampahs
 */
class Kendaraan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kendaraan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kapasitas'], 'number'],
            [['created_at', 'updated_at'], 'safe'],
            [['created_by', 'updated_by'], 'integer'],
            [['kode'], 'string', 'max' => 10],
            [['nama'], 'string', 'max' => 45],
            [['nopol'], 'string', 'max' => 15],
            [['kode'], 'unique'],
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
            'kapasitas' => 'Kapasitas',
            'nopol' => 'Nopol',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTransaksiBanksampahs()
    {
        return $this->hasMany(TransaksiBanksampah::className(), ['kendaraan_id' => 'id']);
    }
}
