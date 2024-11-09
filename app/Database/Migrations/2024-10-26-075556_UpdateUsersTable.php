<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UpdateUsersTable extends Migration
{
    public function up()
    {
        // Menambahkan kolom 'role_id' ke tabel 'users'
        $this->forge->addColumn('users', [
            'role_id' => [
                'type'       => 'INT',
                'constraint' => 5,
                'unsigned'   => true,
            ]
        ]);

        // Menambahkan foreign key pada kolom 'role_id'
        $this->db->query('ALTER TABLE `users` ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles`(`role_id`) ON DELETE CASCADE ON UPDATE CASCADE');
    }

    public function down()
    {
        // Menghapus kolom 'role_id' dari tabel 'users'
        $this->forge->dropColumn('users', 'role_id');
    }
}
