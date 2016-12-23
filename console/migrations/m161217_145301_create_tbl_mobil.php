<?php

use yii\db\Migration;

class m161217_145301_create_tbl_mobil extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%mobil}}', [
            'id' => $this->primaryKey(),
            'nama' => $this->string(255),
            'gambar' => $this->string(255),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%mobil}}');
    }
}
