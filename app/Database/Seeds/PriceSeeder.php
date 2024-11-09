<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class PriceSeeder extends Seeder
{
    public function run()
    {
        $data = [
            //harga untuk provinsi 1
            ['prov_1' => '11', 'prov_2' => '1', 'harga' => '60000'],
            ['prov_1' => '11', 'prov_2' => '2', 'harga' => '55000'],
            ['prov_1' => '11', 'prov_2' => '3', 'harga' => '50000'],
            ['prov_1' => '11', 'prov_2' => '4', 'harga' => '40000'],
            ['prov_1' => '11', 'prov_2' => '5', 'harga' => '40000'],
            ['prov_1' => '11', 'prov_2' => '6', 'harga' => '35000'],
            ['prov_1' => '11', 'prov_2' => '7', 'harga' => '30000'],
            ['prov_1' => '11', 'prov_2' => '8', 'harga' => '30000'],
            ['prov_1' => '11', 'prov_2' => '9', 'harga' => '35000'],
            ['prov_1' => '11', 'prov_2' => '10', 'harga' => '30000'],
            ['prov_1' => '11', 'prov_2' => '11', 'harga' => '10000'],
            ['prov_1' => '11', 'prov_2' => '12', 'harga' => '20000'],
            ['prov_1' => '11', 'prov_2' => '13', 'harga' => '25000'],
            ['prov_1' => '11', 'prov_2' => '14', 'harga' => '30000'],
            ['prov_1' => '11', 'prov_2' => '15', 'harga' => '30000'],
            ['prov_1' => '11', 'prov_2' => '16', 'harga' => '20000'],
            ['prov_1' => '11', 'prov_2' => '17', 'harga' => '35000'],
            ['prov_1' => '11', 'prov_2' => '18', 'harga' => '45000'],
            ['prov_1' => '11', 'prov_2' => '19', 'harga' => '130000'],
            ['prov_1' => '11', 'prov_2' => '20', 'harga' => '40000'],
            ['prov_1' => '11', 'prov_2' => '21', 'harga' => '65000'],
            ['prov_1' => '11', 'prov_2' => '22', 'harga' => '55000'],
            ['prov_1' => '11', 'prov_2' => '23', 'harga' => '130000'],
            ['prov_1' => '11', 'prov_2' => '24', 'harga' => '70000'],
            ['prov_1' => '11', 'prov_2' => '25', 'harga' => '85000'],
            ['prov_1' => '11', 'prov_2' => '26', 'harga' => '90000'],
            ['prov_1' => '11', 'prov_2' => '27', 'harga' => '60000'],
            ['prov_1' => '11', 'prov_2' => '28', 'harga' => '95000'],
            ['prov_1' => '11', 'prov_2' => '29', 'harga' => '75000'],
            ['prov_1' => '11', 'prov_2' => '30', 'harga' => '70000'],
            ['prov_1' => '11', 'prov_2' => '31', 'harga' => '170000'],
            ['prov_1' => '11', 'prov_2' => '32', 'harga' => '160000'],
            ['prov_1' => '11', 'prov_2' => '33', 'harga' => '170000'],
            ['prov_1' => '11', 'prov_2' => '34', 'harga' => '370000'],
            ['prov_1' => '11', 'prov_2' => '35', 'harga' => '200000'],
            ['prov_1' => '11', 'prov_2' => '36', 'harga' => '200000'],
            ['prov_1' => '11', 'prov_2' => '37', 'harga' => '200000'],

        ];

        // Insert data into the provinsi table
        $this->db->table('prices')->insertBatch($data);
    }
}
