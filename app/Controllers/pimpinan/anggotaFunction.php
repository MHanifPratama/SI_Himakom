<?php

namespace App\Controllers\pimpinan;
use App\Controllers\BaseController;
use App\Models\admin\Biodata;
use App\Models\admin\Bidang;
class anggotaFunction extends BaseController{
    public function list_laporan(){
        $a = session()->get('id_bidang');
        $biodata = new Biodata();
        $bidang = new Bidang();
        $dataBiodata = $biodata->getAllDataFromAllTable()->orderBy('id_anggota','DESC')->like('biodata.id_bidang',$a)->get()->getResultArray();
        $data=[
            'title' => 'List Laporan',
            'BiodataBidang' => $dataBiodata,
        ];
        return view('pimpinan\anggota\listAnggotaBidang',$data);
    }
}