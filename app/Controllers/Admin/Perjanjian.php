<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Perjanjian extends BaseController
{
    public function index(): string
    {
        return view('admin/perjanjian/index');
    }
}
