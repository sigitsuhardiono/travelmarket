<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * SimpanWisataForm is the model behind the simpab paket wisata form.
 */
class SimpanWisataForm extends Model
{
    public $nama_pemesan;
    public $telp1;
    public $telp2;
    public $alamat_jemput;
    public $detail_jemput;
    public $metode_bayar;
    public $paket_id;
    public $keterangan;


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
