<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Carousels extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'carousels_id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'nama_file'    => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'judul'    => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'deskripsi'    => [
                'type'       => 'TEXT',
            ],
            'user_id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
        ]);
        $this->forge->addKey('carousels_id', true);
        $this->forge->addForeignKey('user_id', 'users', 'user_id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('carousels');
    }

    public function down()
    {
        $this->forge->dropTable('carousels');
    }
}
