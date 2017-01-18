<?php

use yii\db\Migration;

class m170118_150743_remove_jam_tr_travel extends Migration
{
    public function up()
    {
        $this->dropColumn('tr_travel','jam');
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
