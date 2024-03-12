<?php

namespace App\Controllers\Front;

use App\Controllers\BaseController;


class Registrasi extends BaseController
{
    public function index(): string
    {
        return view('front/registrasi/index');
    }

    public function simpan()
    {
        $badan          = $this->request->getPost('badan');
        $pass           = $this->request->getPost('password');
        $cpass          = $this->request->getPost('cpassword');
        $nama           = $this->request->getPost('nama');
        $email          = $this->request->getPost('email');
        $hp             = $this->request->getPost('hp');
        $password       = md5("$pass");
        $cpassword      = md5("$cpass");
        $privasi        = $this->request->getPost('privasi');


        if ($password != $cpassword) {
            $pesan = '<div class="alert alert-danger">Ulangi Password tidak sama</div>';
            $this->session->setFlashdata('pesan', $pesan);
            return redirect()->to('registrasi');
            exit();
        }

        $cekid = $this->m_registrasi->cek_email($email);
        if ($cekid->getNumRows() > 0) {
            if ($cekid->getRow()->verifikasi_email == '1') {
                $pesan = '<div class="alert alert-danger">Email sudah terdaftar</div>';
                $this->session->setFlashdata('pesan', $pesan);
                return redirect()->to('registrasi');
                exit();
            } else {
                $pesan = '<div class="alert alert-danger">Email sudah terdaftar & belum diaktivasi</div>';
                $this->session->setFlashdata('pesan', $pesan);
                return redirect()->to('registrasi');
                exit();
            }
        } else {



            $data = array(
                'idrole'            => $badan,
                'nama'              => $nama,
                'email'             => $email,
                'hp'                => $hp,
                'verifikasi_email'  => '0',
                'password'          => $password,
                'privasi'           => $privasi,
            );

            $simpan = $this->m_registrasi->simpan($data, $nama, $email, $badan);

            if ($simpan) {
                $pesan = '<div class="alert alert-success">Buka email anda untuk aktivasi. <br>Atau Cek folder <b>SPAM</b></div>';
                $this->session->setFlashdata('pesan', $pesan);
                return redirect()->to('login');
                exit();
            } else {

                $eror = $this->db->error();
                $pesan = '<div class="alert alert-danger">Gagal registrasi<br>
            		                Alasan : ' . $eror['code'] . ' ' . $eror['message'] . '
            		          </div>';
                $this->session->setFlashdata('pesan', $pesan);
                return redirect()->to('registrasi');
                exit();
            }
        }
    }

    public function verifikasi($id)
    {
        $iduser = decode($id);
        $data = array(
            'verifikasi_email' => '1'
        );


        $cekverif = $this->db->query("select count(*) as jlh from users where iduser='" . $iduser . "' and verifikasi_email='1'")->getRow()->jlh;
        if ($cekverif > 0) {
            $pesan = '<div class="alert alert-success">Email sudah di aktivasi.</div>';
            $this->session->setFlashdata('pesan', $pesan);
            return redirect()->to('login');
            exit();
        }

        $update = $this->m_registrasi->verifikasi_email($iduser, $data);
        if ($update) {
            $pesan = '<div class="alert alert-success">Berhasil di aktivasi</div>';
            $this->session->setFlashdata('pesan', $pesan);
            return redirect()->to('login');
        } else {
            $pesan = '<div class="alert alert-danger">Gagal di aktivasi</div>';
            $this->session->setFlashdata('pesan', $pesan);
            return redirect()->to('login');
        }
    }
}
