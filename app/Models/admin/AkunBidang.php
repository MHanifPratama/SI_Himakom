<?php

namespace App\Models\admin;

use CodeIgniter\Model;

class AkunBidang extends Model
{
    protected $table      = 'akun_bidang';
    protected $primaryKey = 'id_akun_bidang';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['id_akun_bidang','id_bidang', 'username','password'];
}
?>