<?php

namespace App\Controllers;

use App\Models\CarouselsModel;
use App\Models\FotoModel;
use App\Models\NewsModel;

class Home extends BaseController
{
    public function index(): string
    {
        $carousels = new CarouselsModel();
        $news = new NewsModel();
        $fotos = new FotoModel();
        $perPage = 4;
        $data = [
            'title' => 'Selamat Datang',
            'page' => 'home',
            'carousels' => $carousels->findAll(),
            'news' => $news
                ->orderBy('created_at', 'DESC')
                ->limit(4)
                ->findAll(),
            'fotos' => $fotos->findAll(),
        ];
        return view('pages/main', $data);
    }

    public function companyProfile()
    {
        $data = [
            'title' => 'Company Profile',
            'page' => 'profile',
        ];
        return view('pages/profile', $data);
    }

    public function news()
    {
        $berita = new NewsModel();
        $data = [
            'title' => 'Halaman berita',
            'page' => 'news',
            'berita' => $berita
                ->orderBy('created_at', 'DESC')
                ->findAll(),
        ];
        return view('pages/berita', $data);
    }

    public function detailNews($id)
    {
        $berita = new NewsModel();
        $data = [
            'title' => 'Selamat Datang',
            'page' => 'news',
            'berita' => $berita->find($id),
            'news' => $berita
                ->whereNotIn('news_id', [$id])
                ->orderBy('created_at', 'DESC')
                ->limit(5)
                ->findAll()
        ];
        return view('pages/detailNews', $data);
    }
}
