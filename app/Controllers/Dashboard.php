<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Dashboard | Resutoran Admin Dashboard',
        ];
        $this->myView(['Render/Dashboard'], $data);
    }

    public function restoran()
    {
        $data = [
            'judul' => 'Restoran | Resutoran Admin Dashboard',
        ];
        $this->myView(['Render/Restoran'], $data);
    }
}