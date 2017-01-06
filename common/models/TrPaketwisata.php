<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tr_paketwisata".
 *
 * @property integer $id
 * @property string $kode
 * @property string $nama_pemesan
 * @property string $telp1
 * @property string $telp2
 * @property string $alamat_jemput
 * @property string $detail_jemput
 * @property integer $harga
 * @property integer $metode_bayar
 * @property integer $paket_id
 * @property string $keterangan
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property PwPaket $paket
 */
class TrPaketwisata extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tr_paketwisata';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['detail_jemput', 'keterangan'], 'string'],
            [['harga', 'metode_bayar', 'paket_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['updated_at'], 'safe'],
            [['created_at'], 'required'],
            [['kode'], 'string', 'max' => 255],
            [['nama_pemesan', 'alamat_jemput'], 'string', 'max' => 225],
            [['telp1', 'telp2'], 'string', 'max' => 15],
            [['paket_id'], 'exist', 'skipOnError' => true, 'targetClass' => PwPaket::className(), 'targetAttribute' => ['paket_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'kode' => Yii::t('app', 'Kode'),
            'nama_pemesan' => Yii::t('app', 'Nama Pemesan'),
            'telp1' => Yii::t('app', 'Telp1'),
            'telp2' => Yii::t('app', 'Telp2'),
            'alamat_jemput' => Yii::t('app', 'Alamat Jemput'),
            'detail_jemput' => Yii::t('app', 'Detail Jemput'),
            'harga' => Yii::t('app', 'Harga'),
            'metode_bayar' => Yii::t('app', 'Metode Bayar'),
            'paket_id' => Yii::t('app', 'Paket ID'),
            'keterangan' => Yii::t('app', 'Keterangan'),
            'status' => Yii::t('app', 'Status'),
            'created_at' => Yii::t('app', 'Created At'),
            'updated_at' => Yii::t('app', 'Updated At'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPaket()
    {
        return $this->hasOne(PwPaket::className(), ['id' => 'paket_id']);
    }
}
