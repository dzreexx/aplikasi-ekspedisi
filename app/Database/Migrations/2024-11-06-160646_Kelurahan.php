<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Kelurahan extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'kelurahan_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'kecamatan_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned'   => true,
            ],
            'nama_kelurahan' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
        ]);
        $this->forge->addKey('kelurahan_id', true);
        $this->forge->addForeignKey('kecamatan_id', 'kecamatan', 'kecamatan_id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('kelurahan');
    }

    public function down()
    {
        $this->forge->dropTable('kelurahan');
    }
}
