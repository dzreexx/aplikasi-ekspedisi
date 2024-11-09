<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kota extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kota_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'provinsi_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned'   => true,
            ],
            'nama_kota' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
        ]);
        $this->forge->addKey('kota_id', true);
        $this->forge->addForeignKey('provinsi_id', 'provinsi', 'provinsi_id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('kota');
    }

    public function down()
    {
        $this->forge->dropTable('kota');
    }
}
