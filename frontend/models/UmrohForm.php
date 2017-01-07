<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

/**
 * UmrohForm is the model behind the paket wisata form.
 */
class UmrohForm extends Model
{
    public $id_kota;


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kota'], 'required'],
            [['id_kota'], 'integer'],
        ];
    }

     /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_kota' => 'Pilih Kota Tempat Anda Berangkat',
        ];
    }
}
