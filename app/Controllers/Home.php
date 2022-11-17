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
        // return view('admin\list');
        $model = new Bidang();
        $modelBiodata = new Biodata();
        $modelProgja = new Kepanitiaan();
        $dataProgja = $modelProgja->join('bidang','bidang.id_bidang=kepanitiaan.id_bidang')->get()->getResultArray();
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
            'progja' => $dataProgja
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
        ->join('jabatan','jabatan.id_jabatan = biodata.id_jabatan')->where('biodata.npm', $this->request->getVar('npm'))->findAll();
        // echo var_dump($hasil);
        $data = [
            'title' => 'Keanggotaan',
            'hasil' => $hasil,
        ];
        return view('home\hasilPencarian',$data);
    }
    public function detail_bidang($id){
        $modelBiodata = new Biodata();
        $modelBidang = new Bidang();
        $model = new Bidang();
        $modelProgja = new Kepanitiaan();
        $dataProgja = $modelProgja->join('bidang','bidang.id_bidang=kepanitiaan.id_bidang')->get()->getResultArray();
        $model = new Bidang();
        $modelProgja = new Kepanitiaan();
        // $data['bidang'] = $model->findAll();
        $data = [
            'title' => 'Detail Bidang',
            'bidang' => $modelBidang->where('id_bidang',$id)->first(),
            'anggota' => $modelBiodata->join('bidang','bidang.id_bidang = biodata.id_bidang')
            ->join('prodi','prodi.id_prodi =biodata.id_prodi')
            ->join('jabatan','jabatan.id_jabatan = biodata.id_jabatan')->where('biodata.id_bidang', $id)->findAll(),
            'totalAnggota'=> $modelBiodata->where('id_bidang',$id)->countAllResults(),
            'totalProgja'=> $modelProgja->where('id_bidang',$id)->countAllResults(),
            // 'kepala_bidang' = $modelBiodata->where('id_bidang',$id)->where()
        ];
        // echo print_r($data['bidang']);
        // echo print_r($data['anggota']);
        return view('home\detailBidang',$data);
}
}

