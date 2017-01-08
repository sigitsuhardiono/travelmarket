<?php

use yii\db\Migration;

class m170108_054555_add_status_umroh_tbl_pw_wisata extends Migration
{
    public function up()
    {
        $this->addColumn('pw_paket','status_wisata',$this->integer()->defaultValue(1)->after('company_id'));
    }

    public function down()
    {
        $this->dropColumn('pw_paket','status_wisata');
        return false;
    }
}
