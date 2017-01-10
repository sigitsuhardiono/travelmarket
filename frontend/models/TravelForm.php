<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * TravelForm is the model behind the paket wisata form.
 */
class TravelForm extends Model
{
    public $id_kota_berangkat;
    public $id_kota_tujuan;
    public $tgl_berangkat;
    public $jam_berangkat;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kota_berangkat','id_kota_tujuan','tgl_berangkat','jam_berangkat'], 'required'],
            [['tgl_berangkat','jam_berangkat'], 'string'],
            [['id_kota_berangkat','id_kota_tujuan'], 'integer'],
        ];
    }

     /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kota_berangkat' => 'Pilih Kota Tempat Anda Berangkat',
            'id_kota_tujuan' => 'Pilih Kota Tempat Tujuan Anda',
            'tgl_berangkat' => 'Tanggal Anda Berangkat',
            'jam_berangkat' => 'Jam Anda Berangkat',
        ];
    }
}
