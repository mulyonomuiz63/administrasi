<?php


namespace App\Models\Admin;

use CodeIgniter\Model;

class m_pengaturan extends Model
{

    public function simpanPassword($data, $iduser, $status)
    {

        $this->db->transBegin();
        //untuk kirim email
        if ($status != '1') {
            $builder = $this->db->table('re_user');
            $builder->where('iduser', $iduser);
            $builder->update($data);
        } else {
            $builder = $this->db->table('user');
            $builder->where('iduser', $iduser);
            $builder->update($data);
        }
        if ($this->db->transStatus() === FALSE) {
            $this->db->transRollback();
            return false;
        } else {
            $this->db->transCommit();
            return true;
        }
    }
    public function simpanProfil($data, $id, $status)
    {

        $this->db->transBegin();
        //untuk kirim email
        if ($status == 'badan') {
            $builder = $this->db->table('perusahaan');
            $builder->where('idperusahaan', $id);
            $builder->update($data);
        } else {
            $builder = $this->db->table('perorangan');
            $builder->where('idperorangan', $id);
            $builder->update($data);
        }

        //proses insert data di table user
        $user = $this->db->table('users')->getWhere(array('iduser' => session()->get('iduser')))->getRow();
        if ($user->status != '1') {
            $dataUser = array(
                'iduser' => $user->iduser,
                'idrole' => $user->idrole,
                'nama' => $user->nama,
                'email' => $user->email,
                'hp' => $user->hp,
                'verifikasi_email' => $user->verifikasi_email,
                'status' => '1',
                'password' => $user->password,
                'privasi' => $user->privasi,
            );
            $builder1 = $this->db->table('user');
            $builder1->insert($dataUser);

            //delete data di table re_user

            $builder2 = $this->db->table('re_user');
            $builder2->where('iduser', $user->iduser);
            $builder2->delete();
        }

        if ($this->db->transStatus() === FALSE) {
            $this->db->transRollback();
            return false;
        } else {
            $this->db->transCommit();
            return true;
        }
    }
    public function get_pengaturan()
    {
        $idrole = session('idrole');
        $iduser = session('iduser');
        if ($idrole == '3' || $idrole == '1') {
            $builder = $this->db->table('perusahaan');
            $builder->where('iduser', $iduser);
            return $builder->get();
        } else {
            $builder = $this->db->table('perorangan');
            $builder->where('iduser', $iduser);
            return $builder->get();
        }
    }
}
