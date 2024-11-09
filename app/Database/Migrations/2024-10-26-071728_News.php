<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class News extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'news_id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'judul'    => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'gambar'    => [
                'type'       => 'VARCHAR',
                'constraint' => '255',
            ],
            'deskripsi'    => [
                'type'       => 'TEXT',
            ],
            'created_at'    => [
                'type'       => 'TIMESTAMP',
            ],
            'updated_at'    => [
                'type'       => 'TIMESTAMP',
            ],
            'user_id'          => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
            ],
        ]);
        $this->forge->addKey('news_id', true);
        $this->forge->addForeignKey('user_id', 'users', 'user_id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('news');
    }

    public function down()
    {
        $this->forge->dropTable('news');
    }
}
