<?php

use yii\db\Migration;

class m161217_165316_create_tbl_tr_travel extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tr_travel}}', [
            'id' => $this->primaryKey(),
            'kota_asal'    => $this->integer(),
            'kota_tujuan'    => $this->integer(),
            'jam'           => $this->integer(),
            'company_id'     => $this->integer(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
        $this->addForeignKey ('fk_kota_asal_travel', 'tr_travel', 'kota_asal', 'kota', 'id', 'NO ACTION', 'NO ACTION');
        $this->addForeignKey ('fk_kota_tujuan_travel', 'tr_travel', 'kota_tujuan', 'kota', 'id', 'NO ACTION', 'NO ACTION');
        $this->addForeignKey ('fk_company_travel', 'tr_travel', 'company_id', 'company', 'id', 'NO ACTION', 'NO ACTION');
    }

    public function down()
    {
        $this->dropTable('{{%tr_travel}}');
    }
}
