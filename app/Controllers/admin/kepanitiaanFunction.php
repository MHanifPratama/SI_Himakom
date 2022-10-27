<?php

namespace App\Controllers\admin;
use App\Controllers\BaseController;
use App\Models\admin\Bidang;
use App\Models\admin\Kepanitiaan;
use App\Models\admin\Biodata;
class kepanitiaanFunction extends BaseController
{


    public function list_kepanitiaan(){
        $kepanitiaan = new Kepanitiaan();
        $dataKepanitiaan = $kepanitiaan->getAllDataFromAllTable();
        $data = [
            'title' => 'Kepanitiaan',
            'Kepanitiaan' => $dataKepanitiaan,
        ];
        return view('admin\kepanitiaan\listKepanitiaan',$data);

    }
    public function tambah(){
        $kepanitiaan = new Kepanitiaan();
        $bidang = new Bidang();
        $dataKepanitiaan = $kepanitiaan->findAll();
        $dataBidang = $bidang->findAll();
        $data = [
            'title' => 'Kepanitiaan',
            'Kepanitiaan' => $dataKepanitiaan,
            'Bidang' => $dataBidang
        ];
        return view('admin\kepanitiaan\tambahKepanitiaan',$data);

    }
    public function simpan(){
        if(!$this->validate([
            'nama_kepanitiaan'=>'required',
            'bidang'=>'required',

        ])){
            return redirect()->to('/tambahKepanitiaan');
        }
        $BiodataModel = new Kepanitiaan();
        $data = [
            'nama_kepanitiaan' => $this->request->getVar('nama_kepanitiaan'),
            'id_bidang' => $this->request->getVar('bidang'),
        ];

        $BiodataModel->save($data);
        return redirect()->to('/listKepanitiaan');
    }
    public function edit($id){
        $BiodataModel = new Kepanitiaan();
        $dataKepanitiaan = $BiodataModel->find($id);
        $data = [
            'title' => 'Edit Kepanitiaan',
            'Kepanitiaan' => $dataKepanitiaan,
        ];
        return view('admin\kepanitiaan\editKepanitiaan', $data);
    }
    public function update($id){
        $BiodataModel = new Kepanitiaan();
        $data = [
            'nama_kepanitiaan' => $this -> request -> getPost('nama_kepanitiaan'),
        ];

        $BiodataModel->update($id,$data);
        return redirect()->to('/listKepanitiaan');
    }
    
}
