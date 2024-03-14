<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Perjanjian extends BaseController
{
    public function index(): string
    {
        $data['menu'] = 'Perjanjian';
        $data['aksi'] = '';
        return view('admin/perjanjian/index', $data);
    }
}
