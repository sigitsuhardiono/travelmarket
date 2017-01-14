<?php

use yii\db\Migration;

class m170112_142320_update_field_jam_tr_travel extends Migration
{
     public function up()
    {
        $this->alterColumn('tr_travel','jam','string(11)');
    }

    public function down()
    {
        echo "m170112_142320_update_field_jam_tr_travel cannot be reverted.\n";

        return false;
    }
}
