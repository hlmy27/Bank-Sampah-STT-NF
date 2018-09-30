<?php

namespace backend\modules\Banksampah\models;

use Yii;
use backend\modules\md\models\KategoriSampah;
use backend\modules\md\models\Lembaga;
/**
 * This is the model class for table "tarif_banksampah".
 *
 * @property int $id
 * @property int $kategori_sampah_id
 * @property int $lembaga_id
 * @property double $harga_kilo
 * @property string $created_at
 * @property string $updated_ata
 * @property int $created_by
 * @property int $updated_by
 *
 * @property KategoriSampah $kategoriSampah
 * @property Lembaga $lembaga
 */
class TarifBanksampah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tarif_banksampah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kategori_sampah_id', 'lembaga_id'], 'required'],
            [['kategori_sampah_id', 'lembaga_id', 'created_by', 'updated_by'], 'integer'],
            [['harga_kilo'], 'number'],
            [['created_at', 'updated_ata'], 'safe'],
            [['kategori_sampah_id'], 'exist', 'skipOnError' => true, 'targetClass' => KategoriSampah::className(), 'targetAttribute' => ['kategori_sampah_id' => 'id']],
            [['lembaga_id'], 'exist', 'skipOnError' => true, 'targetClass' => Lembaga::className(), 'targetAttribute' => ['lembaga_id' => 'id']],
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
            'lembaga_id' => 'Lembaga ID',
            'harga_kilo' => 'Harga Kilo',
            'created_at' => 'Created At',
            'updated_ata' => 'Updated Ata',
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
    public function getLembaga()
    {
        return $this->hasOne(Lembaga::className(), ['id' => 'lembaga_id']);
    }
}
