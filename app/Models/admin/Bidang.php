<?php

namespace App\Models\admin;

use CodeIgniter\Model;

class Bidang extends Model
{
    protected $table      = 'bidang';
    protected $primaryKey = 'id_bidang';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['id_bidang','nama_bidang', 'visi','misi','logo_bidang'];
}
?>