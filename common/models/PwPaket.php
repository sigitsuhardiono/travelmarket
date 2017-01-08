<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "pw_paket".
 *
 * @property integer $id
 * @property string $nama
 * @property string $deskripsi
 * @property integer $harga
 * @property integer $kategori_id
 * @property integer $company_id
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property Company $company
 * @property PwKategori $kategori
 */
class PwPaket extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pw_paket';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['harga', 'kategori_id', 'company_id', 'status', 'created_at', 'updated_at'], 'integer'],
            [['created_at', 'updated_at'], 'required'],
            [['nama', 'deskripsi'], 'string', 'max' => 255],
            [['company_id'], 'exist', 'skipOnError' => true, 'targetClass' => Company::className(), 'targetAttribute' => ['company_id' => 'id']],
            [['kategori_id'], 'exist', 'skipOnError' => true, 'targetClass' => PwKategori::className(), 'targetAttribute' => ['kategori_id' => 'id']],
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
            'deskripsi' => Yii::t('app', 'Deskripsi'),
            'harga' => Yii::t('app', 'Harga'),
            'kategori_id' => Yii::t('app', 'Kategori ID'),
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
    public function getKategori()
    {
        return $this->hasOne(PwKategori::className(), ['id' => 'kategori_id']);
    }

    public static function GetListPaket($id_kategori)
    {
        $data = PwPaket::find()->where(['=', 'kategori_id', $id_kategori])->andWhere(['=', 'pw_paket.status_wisata', 1]);
        return $data;
    }

    public static function GetListUmroh($id_kota)
    {
        $data = PwPaket::find()->joinWith('company')->where(['=', 'company.id_kota', $id_kota])->andWhere(['=', 'pw_paket.status_wisata', 2]);
        return $data;
    }

    public static function GetPaketById($id)
    {
        $data = PwPaket::find()->where(['=', 'id', $id])->one();
        return $data;
    }
}
