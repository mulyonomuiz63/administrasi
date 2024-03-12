<?php


namespace App\Models\Front;

use CodeIgniter\Model;

class M_lupapassword extends Model
{
    public function simpan($data, $email)
    {
        $this->db->transBegin();
        $user = $this->db->table('users')->getWhere(array('email' => $email))->getRow();

        if ($user->status == '1') {
            $builder = $this->db->table('user');
            $builder->where('email', $email);
            $builder->update($data);
        } else {
            $builder = $this->db->table('re_user');
            $builder->where('email', $email);
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


/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */