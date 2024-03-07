<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Surat extends BaseController
{
    public function index(): string
    {
        return view('admin/surat/index');
    }
}
