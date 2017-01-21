<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tr_jadwal".
 *
 * @property integer $id
 * @property string $jam
 * @property integer $tr_travel_id
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property TrTravel $trTravel
 */
class TrJadwal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tr_jadwal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['tr_travel_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['created_at', 'updated_at'], 'required'],
            [['jam'], 'string', 'max' => 20],
            [['tr_travel_id'], 'exist', 'skipOnError' => true, 'targetClass' => TrTravel::className(), 'targetAttribute' => ['tr_travel_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'jam' => Yii::t('app', 'Jam'),
            'tr_travel_id' => Yii::t('app', 'Tr Travel ID'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTrTravel()
    {
        return $this->hasOne(TrTravel::className(), ['id' => 'tr_travel_id']);
    }

    public static function GetListTravel($id_kota_berangkat,$id_kota_tujuan,$tgl_berangkat,$jam_berangkat)
    {
        $data = Trjadwal::find()
                ->joinWith('trTravel');
                // ->where(['=', 'company.id_kota', $id_kota]);
        return $data;
    }

}
