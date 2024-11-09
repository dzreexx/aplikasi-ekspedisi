<?php

namespace App\Controllers;

use App\Models\User;
use App\Models\UserModel;
use CodeIgniter\I18n\Time;
use \Config\Services;

class AuthController extends BaseController
{
    public function index(): string
    {
        return view('pages/register');
    }

    public function store()
    {
        $timestamp = Time::now();
        $model = new UserModel();
        // $message = Services::validation();
        $validation = $this->validate([
            'email' => [
                'rules' => 'required|is_unique[users.email]|valid_email',
                'errors' => [
                    'required' => '{field} tidak boleh kosong!',
                    'is_unique' => '{field} sudah dipakai!',
                    'valid_email' => '{field} tidak valid!'
                ]
            ],
            'username' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} tidak boleh kosong'
                ]
            ],
        ]);

        if (!$validation) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'email' => $this->request->getPost('email'),
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_BCRYPT),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        $model->insert($data);
        return redirect()->to('/login')->with('success', 'Akun berhasil dibuat');
    }

    public function login()
    {
        return view('pages/login');
    }

    public function authLogin()
    {
        $model = new UserModel();
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $validation = $this->validate([
            'email' => [
                'rules' => 'required|valid_email',
                'errors' => [
                    'required' => '{field} harus diisi!',
                    'valid_email' => '{field} harus berformat email!'
                ]
            ],
            'password' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} harus diisi!'
                ]
            ],
        ]);

        if (!$validation) {
            return redirect()->to('login')->with('errors', $this->validator->getErrors());
        }

        $user = $model->where('email', $email)->first();
        if ($user && password_verify($password, $user['password'])) {
            $ses_data = [
                'id' => $user['user_id'],
                'username' => $user['username'],
                'email' => $user['email'],
                'isLoggedIn' => true
            ];
            session()->set($ses_data);
            return redirect()->to('dashboard');
        } else {
            return redirect()->to('login')->withInput()->with('error', 'Akun tidak valid');
        }
    }
    public function logout()
    {
        session()->destroy();
        return redirect()->to('/');
    }
}
