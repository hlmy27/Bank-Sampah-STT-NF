<?php

namespace backend\modules\md\models;
use backend\modules\md\models\Lembaga;
use backend\modules\md\models\Nasabah;
use Yii;

/**
 * This is the model class for table "nasabah_banksampah".
 *
 * @property int $id
 * @property int $nasabah_id
 * @property int $banksampah_id
 * @property int $status
 * @property string $created_at
 * @property string $updated_at
 * @property int $created_by
 * @property int $updated_by
 *
 * @property Lembaga $banksampah
 * @property Nasabah $nasabah
 */
class NasabahBanksampah extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'nasabah_banksampah';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nasabah_id', 'banksampah_id'], 'required'],
            [['nasabah_id', 'banksampah_id', 'status', 'created_by', 'updated_by'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
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
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
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
