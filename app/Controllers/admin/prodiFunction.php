<?php

namespace App\Controllers\admin;
use App\Controllers\BaseController;
use App\Models\admin\Prodi;
class prodiFunction extends BaseController
{
    public function list_prodi(){
        $prodi = new Prodi();
        $dataProdi = $prodi->findAll();
        $data = [
            'title' => 'Prodi',
            'Prodi' => $dataProdi
        ];
        return view('admin\prodi\listProdi',$data);
    }
    public function tambah(){
        $prodi = new Prodi();
        $dataProdi = $prodi->findAll();
        $data = [
            'title' => 'Tambah Prodi',
            'Prodi' => $dataProdi,
        ];
        return view('admin\prodi\tambahProdi',$data);
    }
    public function simpan(){
        $prodi = new Prodi();
        $dataProdi = $prodi->findAll();
        $data = [
            'title' => 'Tambah Prodi',
            'Prodi' => $dataProdi,
        ];
        $data = [
            'nama_prodi' => $this->request->getPost('nama_prodi'),
        ];
        $prodi->insert($data);
        return redirect()->to('/listProdi');
    }
    public function hapus($id){
        $prodi = new Prodi();
        $prodi->delete($id);
        return redirect()->to('/listProdi');
    }
    public function edit($id){
        $prodi = new Prodi();
        $dataProdi = $prodi->find($id);
        $data = [
            'title' => 'Edit Prodi',
            'Prodi' => $dataProdi,
        ];
        return view('admin\prodi\editProdi',$data);
    }
    public function update($id){
        $prodi = new Prodi();
        $data = [
            'nama_prodi' => $this->request->getPost('nama_prodi'),
        ];
        $prodi->update($id,$data);
        return redirect()->to('/listProdi');
    }

}