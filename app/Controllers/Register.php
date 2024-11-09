<?php

namespace App\Controllers;

use App\Models\UserModel;

class Register extends BaseController
{
    public function __construct()
    {
        //
    }
    public function index(): string
    {
        $nama = $this->hello;
        $userModel = new UserModel();
        $user = $userModel->findAll();
        dd($nama);

        return view('register');
    }
}
