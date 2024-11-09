<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KotaSeeder extends Seeder
{
    public function run()
    {
        $data = [
            // Aceh
            ['provinsi_id' => 1, 'nama_kota' => 'Banda Aceh'],
            ['provinsi_id' => 1, 'nama_kota' => 'Sabang'],
            ['provinsi_id' => 1, 'nama_kota' => 'Lhokseumawe'],
            ['provinsi_id' => 1, 'nama_kota' => 'Langsa'],
            ['provinsi_id' => 1, 'nama_kota' => 'Subulussalam'],

            // Sumatera Utara
            ['provinsi_id' => 2, 'nama_kota' => 'Medan'],
            ['provinsi_id' => 2, 'nama_kota' => 'Binjai'],
            ['provinsi_id' => 2, 'nama_kota' => 'Tanjung Balai'],
            ['provinsi_id' => 2, 'nama_kota' => 'Pematang Siantar'],
            ['provinsi_id' => 2, 'nama_kota' => 'Tebing Tinggi'],

            // Sumatera Barat
            ['provinsi_id' => 3, 'nama_kota' => 'Padang'],
            ['provinsi_id' => 3, 'nama_kota' => 'Bukittinggi'],
            ['provinsi_id' => 3, 'nama_kota' => 'Payakumbuh'],
            ['provinsi_id' => 3, 'nama_kota' => 'Solok'],

            // Riau
            ['provinsi_id' => 4, 'nama_kota' => 'Pekanbaru'],
            ['provinsi_id' => 4, 'nama_kota' => 'Dumai'],

            // Kepulauan Riau
            ['provinsi_id' => 5, 'nama_kota' => 'Tanjung Pinang'],
            ['provinsi_id' => 5, 'nama_kota' => 'Batam'],

            // DKI Jakarta
            ['provinsi_id' => 11, 'nama_kota' => 'Jakarta Pusat'],
            ['provinsi_id' => 11, 'nama_kota' => 'Jakarta Utara'],
            ['provinsi_id' => 11, 'nama_kota' => 'Jakarta Timur'],
            ['provinsi_id' => 11, 'nama_kota' => 'Jakarta Selatan'],
            ['provinsi_id' => 11, 'nama_kota' => 'Jakarta Barat'],

            // Jawa Barat
            ['provinsi_id' => 12, 'nama_kota' => 'Bandung'],
            ['provinsi_id' => 12, 'nama_kota' => 'Bogor'],
            ['provinsi_id' => 12, 'nama_kota' => 'Bekasi'],
            ['provinsi_id' => 12, 'nama_kota' => 'Depok'],
            ['provinsi_id' => 12, 'nama_kota' => 'Cimahi'],

            // Jawa Tengah
            ['provinsi_id' => 13, 'nama_kota' => 'Semarang'],
            ['provinsi_id' => 13, 'nama_kota' => 'Surakarta (Solo)'],
            ['provinsi_id' => 13, 'nama_kota' => 'Magelang'],
            ['provinsi_id' => 13, 'nama_kota' => 'Salatiga'],

            // DI Yogyakarta
            ['provinsi_id' => 14, 'nama_kota' => 'Yogyakarta'],

            // Jawa Timur
            ['provinsi_id' => 15, 'nama_kota' => 'Surabaya'],
            ['provinsi_id' => 15, 'nama_kota' => 'Malang'],
            ['provinsi_id' => 15, 'nama_kota' => 'Kediri'],
            ['provinsi_id' => 15, 'nama_kota' => 'Blitar'],
            ['provinsi_id' => 15, 'nama_kota' => 'Mojokerto'],

            // Bali
            ['provinsi_id' => 17, 'nama_kota' => 'Denpasar'],

            // Nusa Tenggara Barat
            ['provinsi_id' => 18, 'nama_kota' => 'Mataram'],
            ['provinsi_id' => 18, 'nama_kota' => 'Bima'],

            // Nusa Tenggara Timur
            ['provinsi_id' => 19, 'nama_kota' => 'Kupang'],

            // Kalimantan Barat
            ['provinsi_id' => 20, 'nama_kota' => 'Pontianak'],
            ['provinsi_id' => 20, 'nama_kota' => 'Singkawang'],

            // Kalimantan Timur
            ['provinsi_id' => 23, 'nama_kota' => 'Samarinda'],
            ['provinsi_id' => 23, 'nama_kota' => 'Balikpapan'],

            // Sulawesi Selatan
            ['provinsi_id' => 27, 'nama_kota' => 'Makassar'],
            ['provinsi_id' => 27, 'nama_kota' => 'Parepare'],
            ['provinsi_id' => 27, 'nama_kota' => 'Palopo'],

            // Papua
            ['provinsi_id' => 34, 'nama_kota' => 'Jayapura'],

            // Papua Barat
            ['provinsi_id' => 35, 'nama_kota' => 'Manokwari'],
            ['provinsi_id' => 35, 'nama_kota' => 'Sorong'],
        ];

        // Insert data into the kota table
        $this->db->table('kota')->insertBatch($data);
    }
}
