<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\UserModel;
use App\Models\CarouselsModel;
use App\Models\FotoModel;
use App\Models\NewsModel;
use \Config\Services;
use CodeIgniter\Controller;
use CodeIgniter\I18n\Time;

class MainPageController extends BaseController
{
    public function __construct()
    {
        $this->carouselsModel = new CarouselsModel();
        $this->newsModel = new NewsModel();
        $this->fotoModel = new FotoModel();
    }
    public function carousels()
    {
        $user = new UserModel();
        $users = $user->findAll();
        $carousels = new CarouselsModel();
        $foto = $carousels->findAll();
        $data = [
            'title' => 'Kelola Carousels',
            'page' => 'carousels',
            'foto' => $foto,
            'users' => $users
        ];

        // dd($foto);
        return view('pages/dashboard/halaman/carousels', $data);
    }

    public function storeCarousels()
    {
        $session = session();
        $userId = $session->get('id');
        $userId = intval($userId);
        $carousels = new CarouselsModel();
        $validation = $this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong!'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong!'
                ]
            ],
            'gambar' => [
                'rules' => 'uploaded[gambar]|max_size[gambar,10240]|mime_in[gambar,image/png,image/jpeg,image/jpg]|is_image[gambar]',
                'errors' => [
                    'uploaded' => 'Input {field} tidak boleh kosong!',
                    'max_size' => '{field} tidak boleh lebih dari 10MB!',
                    'mime_in' => '{field} harus berformat gambar!',
                    'is_image' => '{field} harus berformat gambar!'
                ]
            ],
        ]);

        if (!$validation) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $fotofile = $this->request->getFile('gambar');
        $fotofile->move('img/carousels');

        $data = [
            'nama_file' => $fotofile->getName(),
            'judul' => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'user_id' => $userId
        ];

        $carousels->save($data);
        return redirect()->to('/carousels')->with('success', 'Data berhasil di simpan');
    }

    public function deleteCarousels($id)
    {
        $carousels = $this->carouselsModel->find($id);
        if ($carousels) {
            if ($carousels['nama_file'] && file_exists('img/carousels/' . $carousels['nama_file'])) {
                unlink('img/carousels/' . $carousels['nama_file']);
            }
            $this->carouselsModel->delete($id);
            return redirect()->to('/carousels')->withInput()->with('success', 'data berhasil di hapus');
        } else {
            return redirect()->to('/carousels')->with('error', 'User not found');
        }
    }

    public function news()
    {
        $new = new NewsModel();
        $news = $new->findAll();
        $user = new UserModel();
        $users = $user->findAll();
        $data = [
            'title' => 'Kelola Berita',
            'page' => 'berita',
            'news' => $news,
            'users' => $users,
        ];

        return view('pages/dashboard/halaman/berita', $data);
    }

    public function storeNews()
    {
        $news = new NewsModel();
        $session = session();
        $userId = $session->get('id');
        $userId = intval($userId);
        $validation = $this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong!'
                ]
            ],
            'deskripsi' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong!'
                ]
            ],
            'gambar' => [
                'rules' => 'uploaded[gambar]|max_size[gambar,10240]|mime_in[gambar,image/png,image/jpeg,image/jpg]|is_image[gambar]',
                'errors' => [
                    'uploaded' => 'Input {field} tidak boleh kosong!',
                    'max_size' => '{field} tidak boleh lebih dari 10MB!',
                    'mime_in' => '{field} harus berformat gambar!',
                    'is_image' => '{field} harus berformat gambar!'
                ]
            ],
        ]);
        if (!$validation) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }
        $filegambar = $this->request->getFile('gambar');
        $namagambar = $filegambar->getName();
        $filegambar->move('img/news');

        $data = [
            'judul' => $this->request->getPost('judul'),
            'deskripsi' => $this->request->getPost('deskripsi'),
            'gambar' => $namagambar,
            'user_id' => $userId,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];

        $news->save($data);
        return redirect()->to('/berita')->withInput()->with('success', 'Berhasil ditambahkan');
    }

    public function deleteNews($id)
    {
        $news = $this->newsModel->find($id);
        // dd($news['gambar']);
        // dd(file_exists('img/' . $news['gambar']));
        if ($news) {
            if ($news['gambar'] && file_exists('img/news/' . $news['gambar'])) {
                unlink('img/news/' . $news['gambar']);
            }

            $this->newsModel->delete($id);
            return redirect()->to('/berita')->with('success', 'data berhasil dihapus!');
        } else {
            return redirect()->to('/berita')->with('error', 'gagal menghapus data!');
        }
    }

    public function foto()
    {
        $foto = new FotoModel();
        $user = new UserModel();
        $fotos = $foto->findAll();
        $users = $user->findAll();
        $data = [
            'title' => 'Kelola Foto',
            'page' => 'foto',
            'fotos' => $fotos,
            'users' => $users,
        ];

        return view('pages/dashboard/halaman/foto', $data);
    }

    public function storeFoto()
    {
        $user = session()->get('id');
        $userId = intval($user);
        $foto = new FotoModel();
        $validation = $this->validate([
            'judul' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong!'
                ]
            ],
            'gambar' => [
                'rules' => 'uploaded[gambar]|max_size[gambar,10240]|mime_in[gambar,image/png,image/jpeg,image/jpg]|is_image[gambar]',
                'errors' => [
                    'uploaded' => 'Input {field} tidak boleh kosong!',
                    'max_size' => '{field} tidak boleh lebih dari 10MB!',
                    'mime_in' => '{field} harus berformat gambar!',
                    'is_image' => '{field} harus berformat gambar!'
                ]
            ],
        ]);

        if (!$validation) {
            return redirect()->back()->with('errors', $this->validator->getErrors());
        }

        $fileFoto = $this->request->getFile('gambar');
        $fileName = $fileFoto->getName();
        $data = [
            'judul' => $this->request->getPost('judul'),
            'nama_file' => $fileName,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            'user_id' => $userId
        ];
        $fileFoto->move('img/foto');

        $foto->save($data);

        return redirect()->to('/foto')->with('success', 'Data berhasil ditambahkan');
    }

    public function deleteFoto($id)
    {
        $foto = $this->fotoModel->find($id);
        if ($foto) {
            if ($foto['nama_file'] && file_exists('img/foto/' . $foto['nama_file'])) {
                unlink('img/foto/' . $foto['nama_file']);
            }
            $this->fotoModel->delete($id);
            return redirect()->to('/foto')->with('success', 'Data berhasil di hapus.');
        } else {
            return redirect()->to('/foto')->with('error', 'Data gagal di hapus.');
        }
    }

    public function pengguna()
    {
        $data = [
            'title' => 'Kelola Pengguna',
            'page' => 'pengguna'
        ];

        return view('pages/dashboard/admin/pengguna', $data);
    }
    public function akun()
    {
        $data = [
            'title' => 'Kelola Akun',
            'page' => 'akun'
        ];

        return view('pages/dashboard/akun/akun', $data);
    }
}
