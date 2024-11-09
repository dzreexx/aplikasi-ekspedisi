<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KecamatanSeeder extends Seeder
{
    public function run()
    {
        $data = [
            // Kecamatan di Jakarta Pusat (contoh kota_id = 1)
            ['kota_id' => 19, 'nama_kecamatan' => 'Gambir'],
            ['kota_id' => 19, 'nama_kecamatan' => 'Tanah Abang'],
            ['kota_id' => 19, 'nama_kecamatan' => 'Menteng'],
            ['kota_id' => 19, 'nama_kecamatan' => 'Senen'],
            ['kota_id' => 19, 'nama_kecamatan' => 'Cempaka Putih'],
            ['kota_id' => 19, 'nama_kecamatan' => 'Kemayoran'],
            ['kota_id' => 19, 'nama_kecamatan' => 'Sawah Besar'],
            ['kota_id' => 19, 'nama_kecamatan' => 'Johar Baru'],

            // Kecamatan di Jakarta Barat (contoh kota_id = 2)
            ['kota_id' => 23, 'nama_kecamatan' => 'Cengkareng'],
            ['kota_id' => 23, 'nama_kecamatan' => 'Grogol Petamburan'],
            ['kota_id' => 23, 'nama_kecamatan' => 'Kalideres'],
            ['kota_id' => 23, 'nama_kecamatan' => 'Kebon Jeruk'],
            ['kota_id' => 23, 'nama_kecamatan' => 'Kembangan'],
            ['kota_id' => 23, 'nama_kecamatan' => 'Palmerah'],
            ['kota_id' => 23, 'nama_kecamatan' => 'Tambora'],
            ['kota_id' => 23, 'nama_kecamatan' => 'Taman Sari'],

            // Kecamatan di Jakarta Selatan (contoh kota_id = 3)
            ['kota_id' => 22, 'nama_kecamatan' => 'Kebayoran Baru'],
            ['kota_id' => 22, 'nama_kecamatan' => 'Kebayoran Lama'],
            ['kota_id' => 22, 'nama_kecamatan' => 'Pesanggrahan'],
            ['kota_id' => 22, 'nama_kecamatan' => 'Cilandak'],
            ['kota_id' => 22, 'nama_kecamatan' => 'Pasar Minggu'],
            ['kota_id' => 22, 'nama_kecamatan' => 'Jagakarsa'],
            ['kota_id' => 22, 'nama_kecamatan' => 'Mampang Prapatan'],
            ['kota_id' => 22, 'nama_kecamatan' => 'Pancoran'],
            ['kota_id' => 22, 'nama_kecamatan' => 'Tebet'],
            ['kota_id' => 22, 'nama_kecamatan' => 'Setiabudi'],

            // Kecamatan di Jakarta Timur (contoh kota_id = 4)
            ['kota_id' => 21, 'nama_kecamatan' => 'Matraman'],
            ['kota_id' => 21, 'nama_kecamatan' => 'Pulogadung'],
            ['kota_id' => 21, 'nama_kecamatan' => 'Jatinegara'],
            ['kota_id' => 21, 'nama_kecamatan' => 'Duren Sawit'],
            ['kota_id' => 21, 'nama_kecamatan' => 'Kramat Jati'],
            ['kota_id' => 21, 'nama_kecamatan' => 'Makasar'],
            ['kota_id' => 21, 'nama_kecamatan' => 'Cipayung'],
            ['kota_id' => 21, 'nama_kecamatan' => 'Cakung'],
            ['kota_id' => 21, 'nama_kecamatan' => 'Ciracas'],
            ['kota_id' => 21, 'nama_kecamatan' => 'Pasar Rebo'],

            // Kecamatan di Jakarta Utara (contoh kota_id = 5)
            ['kota_id' => 20, 'nama_kecamatan' => 'Penjaringan'],
            ['kota_id' => 20, 'nama_kecamatan' => 'Pademangan'],
            ['kota_id' => 20, 'nama_kecamatan' => 'Tanjung Priok'],
            ['kota_id' => 20, 'nama_kecamatan' => 'Koja'],
            ['kota_id' => 20, 'nama_kecamatan' => 'Kelapa Gading'],
            ['kota_id' => 20, 'nama_kecamatan' => 'Cilincing'],
        ];

        // Insert data into the kecamatan table
        $this->db->table('kecamatan')->insertBatch($data);
    }
}
