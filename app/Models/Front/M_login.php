<?php


namespace App\Models\Front;

use CodeIgniter\Model;

class M_login extends Model
{

    public function cek_login($username, $password)
    {
        $query = "select * from users where (email='" . $username . "' and password='" . $password . "')";
        return $this->db->query($query);
    }
}
