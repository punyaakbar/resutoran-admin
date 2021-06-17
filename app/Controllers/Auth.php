<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function index()
    {
        header('Location: ' . site_url('auth/login/'));
        exit();
    }

    public function login()
    {
        $data = [
            'judul' => 'Login | Resutoran Admin',
        ];
        $this->myView(['Login'], $data);
    }

    public function logout()
    {
        header('Location: ' . site_url('auth/'));
        exit();
    }

    public function registrasi($email = null)
    {
        $data = [
            'judul' => 'Daftar | Resutoran Admin',
            'email' => $email,
        ];
        if ($email == null) {
            $this->myView(['Registrasi'], $data);
        } else {
            $this->myView(['Registrasi2'], $data);
        }
    }
}