<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Invoice extends BaseController
{
    public function index(): string
    {
        $data['menu'] = 'Invoice';
        $data['aksi'] = '';
        return view('admin/invoice/index', $data);
    }
}
