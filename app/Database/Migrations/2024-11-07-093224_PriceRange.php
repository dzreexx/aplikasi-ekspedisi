<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

use function PHPSTORM_META\type;

class PriceRange extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'price_id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'prov_1' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned'   => true,
            ],
            'prov_2' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned'   => true,
            ],
            'harga' => [
                'type' => 'INT',
                'constraint' => 10,
                'unsigned'   => true,
            ],
        ]);

        $this->forge->addKey('price_id', true);
        $this->forge->addForeignKey('prov_1', 'provinsi', 'provinsi_id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('prov_2', 'provinsi', 'provinsi_id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('prices');
    }

    public function down()
    {
        $this->forge->dropTable('prices');
    }
}
