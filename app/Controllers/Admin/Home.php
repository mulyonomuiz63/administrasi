<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index(): string
    {
        $data['menu'] = 'Home';
        $data['aksi'] = '';
        return view('admin/layout/template', $data);
    }
}
