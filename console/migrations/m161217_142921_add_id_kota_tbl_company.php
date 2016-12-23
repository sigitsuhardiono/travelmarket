<?php

use yii\db\Migration;

class m161217_142921_add_id_kota_tbl_company extends Migration
{
    public function up()
    {
        $this->addColumn('company','id_kota',$this->integer()->after('alamat'));
        $this->addForeignKey ('fk_kota_company', 'company', 'id_kota', 'kota', 'id', 'NO ACTION', 'NO ACTION');
    }

    public function down()
    {
        $this->dropColumn('company','id_kota');
        return false;
    }
}
