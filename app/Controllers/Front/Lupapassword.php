<?php

namespace App\Controllers\Front;

use App\Controllers\BaseController;


class Lupapassword extends BaseController
{
    public function index(): string
    {
        return view('front/lupapassword/index');
    }


    public function resetPassword()
    {

        $email = $this->request->getPost('email');
        $password_new = '#admin123';

        $data = array(
            'password' => md5($password_new),
        );
        $user = $this->db->table('users')->getWhere(array('email' => $email))->getRow();
        if (isset($user)) {

            $textemail = '				
        			<span>Anda baru saja mereset password? <br>
        			Silahkan login dengan password baru anda: </span><br><br>

        			<div style="width: 100%;">
        				<div style="background-color: #24ca4b; width: 300px; height: 50px; font-size: 35px; text-align:center; color: white">' . $password_new . '</div>			
        			</div><br><br>

        			<div style="width: 100%; font-size: 14px;">
        				<b>Best Regards,</b> 
        				<div style="width: 100%; font-size: 14px;"> 
        				TEAM administrasi.com
						<br>Jl. Sawo Raya, Fajar Baru, Kec. Jati Agung, Kabupaten Lampung Selatan, Lampung 35365
						<br>Telepon: +62 815-3242-3436</div>
        			</div>			
        	  		';

            $this->email->setTo($email);
            $this->email->setSubject("Reset sandi user");
            $this->email->setMessage($textemail);


            if ($this->email->send()) {
                $simpan = $this->m_lupapassword->simpan($data, $email, $password_new);
                if ($simpan) {
                    $pesan = '<div class="alert alert-success">Reset sandi berhasil dikirim ke email <br>Atau Cek folder <b>SPAM</b>
                   			</div>';
                    $this->session->setFlashdata('pesan', $pesan);
                    return redirect()->to('login');
                    exit();
                } else {
                    $pesan = '<div class="alert alert-danger">Reset sandi gagal coba lagi...
                   			</div>';
                    $this->session->setFlashdata('pesan', $pesan);
                    return redirect()->to('lupa-password');
                    exit();
                }
            } else {
                $pesan = '<div class="alert alert-danger">Reset sandi gagal coba lagi...
                   			</div>';
                $this->session->setFlashdata('pesan', $pesan);
                return redirect()->to('lupa-password');
                exit();
            }
        } else {
            $pesan = '<div class="alert alert-danger">email yang dimasukan tidak ditemukan
                   			</div>';
            $this->session->setFlashdata('pesan', $pesan);
            return redirect()->to('lupa-password');
            exit();
        }
    }
}
