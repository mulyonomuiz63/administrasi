<?php

namespace App\Controllers;

class Registrasi extends BaseController
{
    public function index(): string
    {
        return view('front/registrasi/index');
    }
}
