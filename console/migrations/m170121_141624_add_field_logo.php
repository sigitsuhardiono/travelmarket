<?php

use yii\db\Migration;

class m170121_141624_add_field_logo extends Migration
{
    public function up()
    {
        $this->addColumn('company','logo',$this->string(60)->after('username'));
    }

    public function down()
    {
        $this->dropColumn('company','logo');
        return false;
    }
}
