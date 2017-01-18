<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * SimpanTravelForm is the model behind the paket wisata form.
 */
class SimpanTravelForm extends Model
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
            [['nama_pemesan', 'telp1','alamat_jemput','detail_jemput','harga','metode_bayar','paket_id'], 'required'],
            [['nama_pemesan', 'telp1','telp2','alamat_jemput','detail_jemput','harga','metode_bayar','paket_id','keterangan'], 'string'],
            [['metode_bayar','paket_id'], 'integer'],
        ];
    }

     /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nama_pemesan' => 'Nama Pemesan',
            'telp1' => 'Telp 1',
            'telp2' => 'Telp 2',
            'alamat_jemput' => 'Alamat Penjemputan',
            'detail_jemput' => 'Detail penjemputan',
            'metode_bayar' => 'Metode pembayaran',
            'keterangan' => 'Keterangan Tambahan',
        ];
    }
}
