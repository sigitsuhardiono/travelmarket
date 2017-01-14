<?php

use yii\db\Migration;

class m170114_141847_add_harga_tbl_trtravel extends Migration
{
     public function up()
    {
        $this->addColumn('tr_travel','harga',$this->integer()->after('company_id'));
    }

    public function down()
    {
        $this->dropColumn('tr_travel','harga');
        return false;
    }
}
