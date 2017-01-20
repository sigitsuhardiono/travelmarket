<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tr_travel".
 *
 * @property integer $id
 * @property integer $kota_asal
 * @property integer $kota_tujuan
 * @property string $jam
 * @property integer $company_id
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Company $company
 * @property Kota $kotaAsal
 * @property Kota $kotaTujuan
 */
class TrTravel extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tr_travel';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kota_asal', 'kota_tujuan', 'company_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['created_at', 'updated_at'], 'required'],
            [['company_id'], 'exist', 'skipOnError' => true, 'targetClass' => Company::className(), 'targetAttribute' => ['company_id' => 'id']],
            [['kota_asal'], 'exist', 'skipOnError' => true, 'targetClass' => Kota::className(), 'targetAttribute' => ['kota_asal' => 'id']],
            [['kota_tujuan'], 'exist', 'skipOnError' => true, 'targetClass' => Kota::className(), 'targetAttribute' => ['kota_tujuan' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'kota_asal' => Yii::t('app', 'Kota Asal'),
            'kota_tujuan' => Yii::t('app', 'Kota Tujuan'),
            'company_id' => Yii::t('app', 'Company ID'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompany()
    {
        return $this->hasOne(Company::className(), ['id' => 'company_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKotaAsal()
    {
        return $this->hasOne(Kota::className(), ['id' => 'kota_asal']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKotaTujuan()
    {
        return $this->hasOne(Kota::className(), ['id' => 'kota_tujuan']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTrJadwals()
    {
        return $this->hasMany(TrJadwal::className(), ['tr_travel_id' => 'id']);
    }


    public static function GetListTravel($id_kota_berangkat,$id_kota_tujuan,$tgl_berangkat,$jam_berangkat)
    {
        $data = TrTravel::find()
                ->joinWith('company')
                ->joinWith('kotaAsal AS kotaasal')
                ->joinWith('kotaTujuan AS kotatujuan');
                // ->where(['=', 'company.id_kota', $id_kota]);
        return $data;
    }

}
