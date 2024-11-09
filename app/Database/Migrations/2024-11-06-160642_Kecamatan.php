<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kecamatan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kecamatan_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'kota_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned'   => true,
            ],
            'nama_kecamatan' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
        ]);
        $this->forge->addKey('kecamatan_id', true);
        $this->forge->addForeignKey('kota_id', 'kota', 'kota_id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('kecamatan');
    }

    public function down()
    {
        $this->forge->dropTable('kecamatan');
    }
}
