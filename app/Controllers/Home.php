<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\Admin\Bidang;
use App\Models\Admin\Biodata;
use App\Models\Admin\Kepanitiaan;
class Home extends BaseController
{
    public function index()
    {
        $model = new Bidang();
        $modelBiodata = new Biodata();
        $modelProgja = new Kepanitiaan();
        $modelBidang = new Bidang();
        // $data['bidang'] = $model->findAll();
        $data = [
            'title' => 'Home',
            'bidang' => $model->findAll(),
            'totalAnggota'=> $modelBiodata->countAllResults(),
            'totalProgja'=> $modelProgja->countAllResults(),
            'totalBidang'=> $modelBidang->countAllResults(),
        ];
        // echo var_dump($data['totalProgja']);
        return view('home\home',$data);
    }
    public function viewKeanggotaan(){
        return view('home\cariKeAnggotaan');
    }
    public function cariKeanggotaan(){
        $modelBiodata = new Biodata();
        $hasil = $modelBiodata->join('bidang','bidang.id_bidang = biodata.id_bidang')
        ->join('prodi','prodi.id_prodi =biodata.id_prodi')
        ->join('jabatan','jabatan.id_jabatan = biodata.id_jabatan')->like('biodata.npm', $this->request->getVar('npm'))->findAll();
        // echo var_dump($hasil);
        $data = [
            'title' => 'Keanggotaan',
            'hasil' => $hasil,
        ];
        return view('home\hasilPencarian',$data);
    }
}
