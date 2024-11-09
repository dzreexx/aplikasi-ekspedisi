<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProvinsiSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['nama_provinsi' => 'Aceh', 'code_provinsi' => 'AC'],
            ['nama_provinsi' => 'Sumatera Utara', 'code_provinsi' => 'SU'],
            ['nama_provinsi' => 'Sumatera Barat', 'code_provinsi' => 'SB'],
            ['nama_provinsi' => 'Riau', 'code_provinsi' => 'RI'],
            ['nama_provinsi' => 'Kepulauan Riau', 'code_provinsi' => 'KR'],
            ['nama_provinsi' => 'Jambi', 'code_provinsi' => 'JA'],
            ['nama_provinsi' => 'Sumatera Selatan', 'code_provinsi' => 'SS'],
            ['nama_provinsi' => 'Bangka Belitung', 'code_provinsi' => 'BB'],
            ['nama_provinsi' => 'Bengkulu', 'code_provinsi' => 'BE'],
            ['nama_provinsi' => 'Lampung', 'code_provinsi' => 'LA'],
            ['nama_provinsi' => 'DKI Jakarta', 'code_provinsi' => 'JK'],
            ['nama_provinsi' => 'Jawa Barat', 'code_provinsi' => 'JB'],
            ['nama_provinsi' => 'Jawa Tengah', 'code_provinsi' => 'JT'],
            ['nama_provinsi' => 'DI Yogyakarta', 'code_provinsi' => 'YO'],
            ['nama_provinsi' => 'Jawa Timur', 'code_provinsi' => 'JI'],
            ['nama_provinsi' => 'Banten', 'code_provinsi' => 'BT'],
            ['nama_provinsi' => 'Bali', 'code_provinsi' => 'BA'],
            ['nama_provinsi' => 'Nusa Tenggara Barat', 'code_provinsi' => 'NB'],
            ['nama_provinsi' => 'Nusa Tenggara Timur', 'code_provinsi' => 'NT'],
            ['nama_provinsi' => 'Kalimantan Barat', 'code_provinsi' => 'KB'],
            ['nama_provinsi' => 'Kalimantan Tengah', 'code_provinsi' => 'KT'],
            ['nama_provinsi' => 'Kalimantan Selatan', 'code_provinsi' => 'KS'],
            ['nama_provinsi' => 'Kalimantan Timur', 'code_provinsi' => 'KI'],
            ['nama_provinsi' => 'Kalimantan Utara', 'code_provinsi' => 'KU'],
            ['nama_provinsi' => 'Sulawesi Utara', 'code_provinsi' => 'SA'],
            ['nama_provinsi' => 'Sulawesi Tengah', 'code_provinsi' => 'ST'],
            ['nama_provinsi' => 'Sulawesi Selatan', 'code_provinsi' => 'SN'],
            ['nama_provinsi' => 'Sulawesi Tenggara', 'code_provinsi' => 'SG'],
            ['nama_provinsi' => 'Gorontalo', 'code_provinsi' => 'GO'],
            ['nama_provinsi' => 'Sulawesi Barat', 'code_provinsi' => 'SB'],
            ['nama_provinsi' => 'Maluku', 'code_provinsi' => 'MA'],
            ['nama_provinsi' => 'Maluku Utara', 'code_provinsi' => 'MU'],
            ['nama_provinsi' => 'Papua', 'code_provinsi' => 'PA'],
            ['nama_provinsi' => 'Papua Barat', 'code_provinsi' => 'PB'],
            ['nama_provinsi' => 'Papua Selatan', 'code_provinsi' => 'PS'],
            ['nama_provinsi' => 'Papua Tengah', 'code_provinsi' => 'PT'],
            ['nama_provinsi' => 'Papua Pegunungan', 'code_provinsi' => 'PP'],
        ];

        // Insert data into the provinsi table
        $this->db->table('provinsi')->insertBatch($data);
    }
}
