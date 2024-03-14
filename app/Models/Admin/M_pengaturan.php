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
}
