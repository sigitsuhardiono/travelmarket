<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * WisataForm is the model behind the paket wisata form.
 */
class WisataForm extends Model
{
    public $id_kategori;
    public $id_kota;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kategori', 'id_kota'], 'required'],
            [['id_kategori', 'id_kota'], 'integer'],
        ];
    }

     /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kategori' => 'Pilih Kategori Tujuan Anda.',
            'id_kota' => 'Pilih Kota Tempat Anda Berangkat',
        ];
    }
}
