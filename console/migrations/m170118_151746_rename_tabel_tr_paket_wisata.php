<?php

use yii\db\Migration;

class m170118_151746_rename_tabel_tr_paket_wisata extends Migration
{
    public function up()
    {
        $this->renameTable('tr_paketwisata','trx_paketwisata');
    }

    public function down()
    {
        echo "m170118_151746_rename_tabel_tr_paket_wisata cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
