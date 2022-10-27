<?php

namespace App\Models\admin;

use CodeIgniter\Model;

class Prodi extends Model
{
    protected $table      = 'prodi';
    protected $primaryKey = 'id_prodi';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['id_prodi','nama_prodi'];
}
?>