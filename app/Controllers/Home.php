<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home',
            'isi' => 'home',
        ];
        echo view('layout/wrapper', $data);
    }
}
