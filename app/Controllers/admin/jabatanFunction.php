<?php

namespace App\Controllers\admin;
use App\Controllers\BaseController;

use App\Models\admin\Jabatan;
class jabatanFunction extends BaseController
{
    public function list_jabatan(){
        $jabatan = new Jabatan();
        $dataJabatan = $jabatan->findAll();
        $data = [
            'title' => 'Jabatan',
            'Jabatan' => $dataJabatan
        ];
        return view('admin\jabatan\listJabatan',$data);
    }
    public function tambah(){
        $jabatan = new Jabatan();
        $dataJabatan= $jabatan->findAll();
        $data = [
            'title' => 'Membuat Biodata',
            'Jabatan' => $dataJabatan,
        ];
        return view('admin\jabatan\tambahJabatan', $data);
    }
    public function simpan(){
        if(!$this->validate([
            'nama_jabatan'=>'required',
        ])){
            return redirect()->to('/simpan_jabatan');
        }
        $BiodataModel = new Jabatan();
        $data = [
            'nama_jabatan' => $this -> request -> getPost('nama_jabatan'),
        ];

        $BiodataModel->save($data);
        return redirect()->to('/listJabatan');
    }
    public function hapus($id)
    {
        $BiodataModel = new Jabatan();
        $BiodataModel->delete($id);
        return redirect()->to('/listJabatan');
    }
    public function edit($id){
        $BiodataModel = new Jabatan();
        $dataJabatan = $BiodataModel->find($id);
        $data = [
            'title' => 'Edit Jabatan',
            'Jabatan' => $dataJabatan,
        ];
        return view('admin\jabatan\editJabatan', $data);
    }
    public function update($id){
        $BiodataModel = new Jabatan();
        $data = [
            'nama_jabatan' => $this -> request -> getPost('nama_jabatan'),
        ];
        $BiodataModel->update($id, $data);
        return redirect()->to('/listJabatan');
    }
}
