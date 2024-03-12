<?php

namespace App\Controllers\Front;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index(): string
    {
        return view('front/login/index');
    }

    public function cek_login()
    {
        $email  = $this->request->getPost('email');
        $pass   = $this->request->getPost('password');
        $string = trim("$email");
        $password = trim("$pass");
        $result = "$string";
        $email = preg_replace("/[^a-zA-Z0-9_.@]/", "", $result);
        $row =  preg_match('/\A[a-z0-9__.@]+\z/i', $string);
        if ($row != '0') {
            if (empty($email) and empty($password)) {
                $pesan = '<div class="alert alert-danger">email atau password anda salah </div>';
                $this->session->setFlashdata('pesan', $pesan);
                return redirect()->to('login');
            } else {
                $kirim = $this->m_login->cek_login($email, md5($password));
                $result = $kirim->getRow();
                if ($kirim->getNumRows() > 0) {
                    if ($result->verifikasi_email == '1') {
                        if ($result->status == '1') {
                            $data = array(
                                'iduser' => $result->iduser,
                                'nama' => $result->nama,
                                'email' => $result->email,
                                'idrole' => $result->idrole,
                                'isLoggedIn' => TRUE,
                                'status' => $result->status
                            );

                            $this->session->set($data);
                            return redirect()->to('dashboard');
                        } else {
                            $data = array(
                                'iduser' => $result->iduser,
                                'nama' => $result->nama,
                                'email' => $result->email,
                                'idrole' => $result->idrole,
                                'isLoggedIn' => TRUE,
                                'status' => $result->status
                            );

                            $this->session->set($data);
                            return redirect()->to('dashboard');
                            // return redirect()->to('pengepul/edit/' . encode(session()->get('iduser')));
                        }
                    } else {
                        $pesan = '<div class="alert alert-danger">Lakukan verifikasi email anda! </div>';
                        $this->session->setFlashdata('pesan', $pesan);
                        return redirect()->to('login');
                    }
                } else {
                    $pesan = '<div class="alert alert-danger">Akun belum terdaftar atau salah memasukan email atau password </div>';
                    $this->session->setFlashdata('pesan', $pesan);
                    return redirect()->to('login');
                }
            }
        } else {
            $pesan = '<div class="alert alert-danger">email atau password anda salah </div>';
            $this->session->setFlashdata('pesan', $pesan);
            return redirect()->to('login');
        }
    }

    public function keluar()
    {
        $this->session->destroy();
        return redirect()->to('login');
    }
}
