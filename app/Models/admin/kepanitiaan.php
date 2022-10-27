<?php

namespace App\Models\admin;

use CodeIgniter\Model;

class Kepanitiaan extends Model
{
    protected $table      = 'kepanitiaan';
    protected $primaryKey = 'id_status_kepanitiaan';

    protected $useAutoIncrement = true;

    protected $allowedFields = ['id_status_kepanitiaan','nama_kepanitiaan','id_bidang','jumlah_panitia'];

    public function getAllDataFromAllTable()
    {
        $builder = $this->db->table('kepanitiaan');
        $builder->select('*');
        $builder->join('bidang', 'bidang.id_bidang = kepanitiaan.id_bidang');
        return $builder->get()->getResultArray();
    }
    // public function countJumlah(){
    //     return $builder = $this->db;
    //     $builder->db->select('*')
    //     ->from('kepanitiaan')
    //     ->join('biodata', 'biodata.id_status_kepanitiaan = kepanitiaan.id_status_kepanitiaan')
    //     ->get();
    // }
    
    
}
?>