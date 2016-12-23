<?php

use yii\db\Migration;

class m161217_135248_create_tbl_paket_wisata extends Migration
{
  public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%pw_paket}}', [
            'id' => $this->primaryKey(),
            'nama' => $this->string(255),
            'deskripsi' => $this->string(),
            'harga'    => $this->integer(),
            'kategori_id'    => $this->integer(),
            'company_id'     => $this->integer(),
            'status' => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull(),
        ], $tableOptions);
        $this->addForeignKey ('fk_kategori_paket', 'pw_paket', 'kategori_id', 'pw_kategori', 'id', 'NO ACTION', 'NO ACTION');
        $this->addForeignKey ('fk_company_paket', 'pw_paket', 'company_id', 'company', 'id', 'NO ACTION', 'NO ACTION');
    }

    public function down()
    {
        $this->dropTable('{{%pw_paket}}');
    }
}
