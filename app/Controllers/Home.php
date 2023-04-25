<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'judul' => 'Dashboard',
            'page' => 'users/index',
            'menu' => 'dashboard',
            'submenu' => '',
        ];
        return view('../Views/layout/templateLTE', $data);
    }
}
