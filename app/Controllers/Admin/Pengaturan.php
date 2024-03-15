<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Pengaturan extends BaseController
{
    public function index(): string
    {
        $data['menu'] = 'Pengaturan';
        $data['aksi'] = '';
        $data['data'] = $this->m_pengaturan->get_pengaturan()->getResult();
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
            		          </div>';
            $this->session->setFlashdata('pesan', $pesan);
            return redirect()->to('pengaturan');
            exit();
        }
    }
    public function ubahProfil()
    {
        $status             = $this->request->getPost('status');
        $id                 = $this->request->getPost('id');

        if ($status == "badan") {
            $data = array(
                'nama'              => $this->request->getPost('nama'),
                'alamat'            => $this->request->getPost('alamat'),
                'tgl_pendirian'     => $this->request->getPost('tgl_pendirian'),
                'npwp'              => $this->request->getPost('npwp'),
                'pic'               => $this->request->getPost('pic'),
                'hp'                => $this->request->getPost('hp'),
                'jabatan'           => $this->request->getPost('jabatan'),
            );
        } else {

            $data = array(
                'nama'              => $this->request->getPost('nama'),
                'tempat_lahir'      => $this->request->getPost('tempat_lahir'),
                'tgl_lahir'         => $this->request->getPost('tgl_lahir'),
                'alamat'            => $this->request->getPost('alamat'),
                'jk'                => $this->request->getPost('jk'),
                'agama'             => $this->request->getPost('agama'),
                'nik'               => $this->request->getPost('nik'),
                'hp'                => $this->request->getPost('hp'),
            );
        }

        $simpan = $this->m_pengaturan->simpanProfil($data, $id, $status);

        if ($simpan) {
            $pesan = '<div class="alert alert-success">Berhasil menyimpan data...</div>';
            $this->session->setFlashdata('pesan', $pesan);
            if (session('status') == '1') {
                return redirect()->to('pengaturan');
            } else {
                return redirect()->to('keluar');
            }
            exit();
        } else {

            $eror = $this->db->error();
            $pesan = '<div class="alert alert-danger">Gagal menyimpan data..<br>
            		          </div>';
            $this->session->setFlashdata('pesan', $pesan);
            return redirect()->to('pengaturan');
            exit();
        }
    }
}
