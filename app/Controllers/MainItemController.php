<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\UserModel;
use App\Models\CarouselsModel;
use App\Models\FotoModel;
use App\Models\KecamatanModel;
use App\Models\KotaModel;
use App\Models\NewsModel;
use App\Models\PriceModel;
use App\Models\ProvinsiModel;
use \Config\Services;
use CodeIgniter\Controller;
use CodeIgniter\I18n\Time;

class MainItemController extends BaseController
{
    public function __construct()
    {
        //
    }
    public function index()
    {
        $data = [
            'title' => 'Halaman Dashboard',
            'page' => 'dashboard',
            // 'page' => 'monyet',
        ];
        return view('pages/dashboard/main/dashboard', $data);
    }

    public function package()
    {
        $data = [
            'title' => 'Halaman Paket',
            'page' => 'paket'
        ];

        return view('pages/dashboard/main/paket', $data);
    }

    public function location()
    {
        $provinsi = new ProvinsiModel();
        // $asal = $provinsi->where('provinsi_id', 11)->first();
        // dd($asal['provinsi_id']);
        $data = [
            'title' => 'Kelola Lokasi',
            'page' => 'lokasi',
            'asal' => $provinsi->where('provinsi_id', 11)->first(),
            'tujuan' => $provinsi->findAll(),
        ];
        return view('pages/dashboard/main/location', $data);
    }

    public function locKota($id)
    {
        $kt = new KotaModel();
        $kota = $kt->where('provinsi_id', $id)->findAll();
        // $asal = $provinsi->where('provinsi_id', 11)->first();
        // dd($asal['provinsi_id']);

        return $this->response->setJSON($kota);
    }

    public function locKecamatan($id)
    {
        $kcmtn = new KecamatanModel();
        $kecamatan = $kcmtn->where('kota_id', $id)->findAll();
        // $asal = $provinsi->where('provinsi_id', 11)->first();
        // dd($asal['provinsi_id']);

        return $this->response->setJSON($kecamatan);
    }

    public function storeLocation()
    {
        $asal = $this->request->getPost('asal');
        $tujuan = $this->request->getPost('tujuan');

        $harga = new PriceModel();
        $tampilharga = $harga->where(['prov_1' => $asal, 'prov_2' => $tujuan])->findAll();
        dd($tampilharga);
    }
}
