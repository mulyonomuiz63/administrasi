<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Surat extends BaseController
{
    public function index(): string
    {
        $data['menu'] = 'Surat';
        $data['aksi'] = '';
        return view('admin/surat/index', $data);
    }
}
