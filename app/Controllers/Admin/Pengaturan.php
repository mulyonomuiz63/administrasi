<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Pengaturan extends BaseController
{
    public function index(): string
    {
        $data['menu'] = 'Pengaturan';
        $data['aksi'] = '';
        return view('admin/pengaturan/index', $data);
    }
    public function ubahPassword()
    {
        $iduser         = session('iduser');
        $status         = session('status');
        $pass           = $this->request->getPost('password');
        $password       = md5("$pass");
        $data = array(
            'password'          => $password,
        );

        $simpan = $this->m_pengaturan->simpanPassword($data, $iduser, $status);

        if ($simpan) {
            $pesan = '<div class="alert alert-success">Berhasil merubah password...</div>';
            $this->session->setFlashdata('pesan', $pesan);
            return redirect()->to('pengaturan');
            exit();
        } else {

            $eror = $this->db->error();
            $pesan = '<div class="alert alert-danger">Gagal merubah password..<br>
            		                Alasan : ' . $eror['code'] . ' ' . $eror['message'] . '
            		          </div>';
            $this->session->setFlashdata('pesan', $pesan);
            return redirect()->to('pengaturan');
            exit();
        }
    }
}
