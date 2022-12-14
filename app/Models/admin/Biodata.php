<?php

namespace App\Models\admin;

use CodeIgniter\Model;

class Biodata extends Model
{
    protected $table      = 'biodata';
    protected $primaryKey = 'id_anggota';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['id_anggota','nama_anggota', 'npm','id_bidang','id_prodi','id_jabatan','id_status_kepanitiaan','periode'];
    
    public function getAllDataFromAllTable(){
        return $this->db->table('biodata')
        ->join('bidang','bidang.id_bidang = biodata.id_bidang')
        ->join('prodi','prodi.id_prodi =biodata.id_prodi')
        ->join('jabatan','jabatan.id_jabatan = biodata.id_jabatan')
        ->join('kepanitiaan','kepanitiaan.id_status_kepanitiaan = biodata.id_status_kepanitiaan')
        ->GroupBy('nama_bidang')
        ->GroupBy('nama_prodi')
        ->GroupBy('nama_jabatan')
        ->GroupBy('nama_kepanitiaan');
        // ->orderBy('id_anggota','ASC')
        // ->get()->getResultArray();
    }
    public function getAllDataFromAllTableOnlyBidang(){
        return $this->db->table('biodata')
        ->join('bidang','bidang.id_bidang = biodata.id_bidang')
        ->GroupBy('nama_bidang')
        ->get()->getResultArray();
    }
    public function searchAnggota($Bidang) {
        return $this->table('biodata')
        ->join('bidang','bidang.id_bidang = biodata.id_bidang')
        ->join('prodi','prodi.id_prodi =biodata.id_prodi')
        ->join('jabatan','jabatan.id_jabatan = biodata.id_jabatan')
        ->join('kepanitiaan','kepanitiaan.id_status_kepanitiaan = biodata.id_status_kepanitiaan')
        ->like('biodata.id_bidang',$Bidang)
        ->get() ->getResultArray();
    }
    
}
?>