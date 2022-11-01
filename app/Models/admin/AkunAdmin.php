<?php

namespace App\Models\admin;

use CodeIgniter\Model;

class AkunAdmin extends Model
{
    protected $table      = 'akun_admin';
    protected $primaryKey = 'id_admin';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['id_admin','nama_admin', 'email','password'];
}
?>