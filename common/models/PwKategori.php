<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pw_kategori".
 *
 * @property integer $id
 * @property string $nama
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property PwPaket[] $pwPakets
 */
class PwKategori extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pw_kategori';
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
    public function getPwPakets()
    {
        return $this->hasMany(PwPaket::className(), ['kategori_id' => 'id']);
    }
}
