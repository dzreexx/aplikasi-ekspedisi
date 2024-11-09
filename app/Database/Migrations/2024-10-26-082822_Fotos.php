<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Fotos extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'foto_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true
            ],
            'judul' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'nama_file' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'created_at' => [
                'type' => 'TIMESTAMP'
            ],
            'updated_at' => [
                'type' => 'TIMESTAMP'
            ],
            'user_id' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true
            ],
        ]);
        $this->forge->addKey('foto_id', true);
        $this->forge->addForeignKey('user_id', 'users', 'user_id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('fotos');
    }

    public function down()
    {
        $this->forge->dropTable('fotos');
    }
}
