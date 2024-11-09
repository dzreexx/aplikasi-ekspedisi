<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Roles extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'role_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'role' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'deskripsi' => [
                'type'           => 'TEXT',
                'null'           => true,
            ],
        ]);
        $this->forge->addKey('role_id', true); // Menambahkan Primary Key
        $this->forge->createTable('roles');
    }

    public function down()
    {
        $this->forge->dropTable('roles');
    }
}
