<?php

namespace App\Models\admin;

use CodeIgniter\Model;

class Biodata extends Model
{
    protected $table      = 'biodata';
    protected $primaryKey = 'id_anggota';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['nama_anggota', 'npm','id_bidang','id_prodi','id_jabatan','periode'];
    
    public function getAllDataFromAllTable(){
        return $this->db->table('biodata')
        ->join('bidang','bidang.id_bidang = biodata.id_bidang')
        ->join('prodi','prodi.id_prodi =biodata.id_prodi')
        ->join('jabatan','jabatan.id_jabatan = biodata.id_jabatan')
        ->GroupBy('nama_bidang')
        ->GroupBy('nama_prodi')
        ->GroupBy('nama_jabatan')
        ->orderBy('id_anggota','ASC')
        ->get()->getResultArray();
    }
}
?>