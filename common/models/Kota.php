<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "kota".
 *
 * @property integer $id
 * @property string $nama
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Company[] $companies
 * @property Overarea[] $overareas
 * @property TrTravel[] $trTravels
 * @property TrTravel[] $trTravels0
 */
class Kota extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'kota';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['created_at', 'updated_at'], 'required'],
            [['nama'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'nama' => Yii::t('app', 'Nama'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCompanies()
    {
        return $this->hasMany(Company::className(), ['id_kota' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOverareas()
    {
        return $this->hasMany(Overarea::className(), ['kota_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTrTravels()
    {
        return $this->hasMany(TrTravel::className(), ['kota_asal' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTrTravels0()
    {
        return $this->hasMany(TrTravel::className(), ['kota_tujuan' => 'id']);
    }
}
