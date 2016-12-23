<?php

use yii\db\Migration;

class m161217_145801_add_id_kota_tbl_tr_overarea extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%overarea}}', [
            'id' => $this->primaryKey(),
            'kelurahan' => $this->string(255),
            'kelurahan' => $this->string(255),
            'kota_id'    => $this->integer(),
            'company_id'     => $this->integer(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
        $this->addForeignKey ('fk_kota_overarea', 'overarea', 'kota_id', 'kota', 'id', 'NO ACTION', 'NO ACTION');
        $this->addForeignKey ('fk_company_overarea', 'overarea', 'company_id', 'company', 'id', 'NO ACTION', 'NO ACTION');
    }

    public function down()
    {
        $this->dropTable('{{%overarea}}');
    }
}
