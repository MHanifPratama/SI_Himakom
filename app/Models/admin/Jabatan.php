<?php

namespace App\Models\admin;

use CodeIgniter\Model;

class Jabatan extends Model
{
    protected $table      = 'jabatan';
    protected $primaryKey = 'id_jabatan';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['id_jabatan','nama_jabatan'];
}
?>