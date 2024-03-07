<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Profil extends BaseController
{
    public function index()
    {
        return view('admin/profil/index');
    }
}
