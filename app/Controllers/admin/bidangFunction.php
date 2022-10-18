<?php

namespace App\Controllers\admin;
use App\Controllers\BaseController;

use App\Models\admin\Bidang;
class bidangFunction extends BaseController
{
    public function list_bidang(){
        $bidang = new Bidang();
        $dataBidang = $bidang->findAll();
        $data = [
            'title' => 'Bidang',
            'Bidang' => $dataBidang
        ];
        return view('admin\bidang\listBidang',$data);
    }
    public function tambah(){
        $bidang = new Bidang();
        $dataBidang= $bidang->findAll();
        $data = [
            'title' => 'Membuat Biodata',
            'Bidang' => $dataBidang,
        ];
        return view('admin\bidang\tambahBidang', $data);
    }
    public function simpan(){
        if(!$this->validate([
            'nama_bidang'=>'required',
            'visi'=>'required',
            'misi'=>'required',
        ])){
            return redirect()->to('/simpan_bidang');
        }
        $BiodataModel = new Bidang();
        $data = [
            'nama_bidang' => $this -> request -> getPost('nama_bidang'),
            'visi' => $this -> request -> getPost('visi'),
            'misi' => $this -> request -> getPost('misi'),
        ];

        $BiodataModel->save($data);
        return redirect()->to('/listBidang');
    }
    public function hapus($id)
    {
        $BiodataModel = new Bidang();
        $BiodataModel->delete($id);
        return redirect()->to('/listBidang');
    }
    public function edit($id){
        $BiodataModel = new Bidang();
        $dataBidang = $BiodataModel->find($id);
        $data = [
            'title' => 'Edit Bidang',
            'Bidang' => $dataBidang,
        ];
        return view('admin\bidang\editBidang', $data);
    }
    public function update($id){
        $BiodataModel = new Bidang();
        $data = [
            'nama_bidang' => $this -> request -> getPost('nama_bidang'),
            'visi' => $this -> request -> getPost('visi'),
            'misi' => $this -> request -> getPost('misi'),
        ];

        $BiodataModel->update($id,$data);
        return redirect()->to('/listBidang');
    }

}