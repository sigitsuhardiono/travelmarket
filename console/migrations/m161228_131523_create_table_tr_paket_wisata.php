<?php

use yii\db\Migration;

class m161228_131523_create_table_tr_paket_wisata extends Migration
{
    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%tr_paketwisata}}', [
            'id' => $this->primaryKey(),
            'kode'              => $this->string(),
            'nama_pemesan'    => $this->string(225),
            'telp1'             => $this->string(15),
            'telp2'             => $this->string(15),
            'alamat_jemput'    => $this->string(225),
            'detail_jemput'    => $this->text(),
            'harga'             => $this->integer(),
            'metode_bayar'      => $this->integer(),
            'paket_id'     => $this->integer(),
            'keterangan'     => $this->text(),
            'status'        => $this->smallInteger()->notNull()->defaultValue(10),
            'created_at'    => $this->integer()->notNull(),
            'updated_at'    => $this->integer()->notNull(),
        ], $tableOptions);
        $this->addForeignKey ('fk_paket_tr_paket', 'tr_paketwisata', 'paket_id', 'pw_paket', 'id', 'NO ACTION', 'NO ACTION');
    }

    public function down()
    {
        $this->dropTable('{{%tr_paketwisata}}');
    }
}
