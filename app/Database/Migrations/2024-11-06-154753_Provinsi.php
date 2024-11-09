<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Provinsi extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'provinsi_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'nama_provinsi' => [
                'type' => 'VARCHAR',
                'constraint' => '100'
            ],
            'code_provinsi' => [
                'type' => 'VARCHAR',
                'constraint' => '10'
            ],
        ]);
        $this->forge->addUniqueKey('code_provinsi');
        $this->forge->addKey('provinsi_id', true);
        $this->forge->createTable('provinsi');
    }

    public function down()
    {
        $this->forge->dropTable('provinsi');
    }
}
