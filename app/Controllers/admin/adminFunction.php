<?php

namespace App\Controllers\admin;
use App\Controllers\BaseController;
use App\Models\admin\Biodata;
use App\Models\admin\Bidang;
use App\Models\admin\Jabatan;
use App\Models\admin\Prodi;
class adminFunction extends BaseController
{
    public function index()
    {
        $biodata = new Biodata();
        $dataBiodata = $biodata->getAllDataFromAllTable();
        $data = [
            'title' => 'Biodata',
            'Biodata' => $dataBiodata
        ];
        return view('admin\list',$data);
    }
    public function tambah(){
        $bidang = new Bidang();
        $jabatan = new Jabatan();
        $prodi = new Prodi();
        $dataBidang= $bidang->findAll();
        $dataProdi= $prodi->findAll();
        $dataJabatan= $jabatan->findAll();
        $data = [
            'title' => 'Membuat Biodata',
            'Bidang' => $dataBidang,
            'Jabatan' => $dataJabatan,
            'Prodi' => $dataProdi
        ];
        return view('admin\tambahAnggota', $data);

    }
    public function simpan(){
        if(!$this->validate([
            'nama_anggota'=>'required',
            'npm'=>'required',
            'bidang'=>'required',
            'prodi'=>'required',
            'status_jabatan'=>'required',
            'periode'=>'required',
        ])){
            return redirect()->to('/simpan');
        }
        $BiodataModel = new Biodata();
        $data = [
            'nama_anggota' => $this -> request -> getPost('nama_anggota'),
            'npm' => $this -> request -> getPost('npm'),
            'id_bidang' => $this -> request -> getPost('bidang'),
            'id_prodi' => $this -> request -> getPost('prodi'),
            'id_jabatan' => $this -> request -> getPost('status_jabatan'),
            'periode' => $this -> request -> getPost('periode'),
        ];

        $BiodataModel->save($data);
        return redirect()->to('/');
    }
    public function hapus($id)
    {
        $BiodataModel = new Biodata();
        $BiodataModel->delete($id);
    
        return redirect()->to('/');
    
    }
    public function edit($id){
        $bidang = new Bidang();
        $jabatan = new Jabatan();
        $prodi = new Prodi();
        $dataBidang= $bidang->findAll();
        $dataProdi= $prodi->findAll();
        $dataJabatan= $jabatan->findAll();
        $BiodataModel = new Biodata();
        $Biodata = $BiodataModel->find($id);
        
        $data = [
            'title' => ' Edit Biodata',
            'Biodata' => $Biodata,
            'Bidang' => $dataBidang,
            'Jabatan' => $dataJabatan,
            'Prodi' => $dataProdi
        ];
        return view('admin/editAnggota', $data);
    }
    public function update($id){
        if(!$this->validate([
            'nama_anggota'=>'required',
            'npm'=>'required',
            'bidang'=>'required',
            'prodi'=>'required',
            'status_jabatan'=>'required',
            'periode'=>'required',
        ])){
            return redirect()->to('/simpan');
        }

        $mahasiswaModel = new Biodata();
        $data = [
            'nama_anggota' => $this -> request -> getVar('nama_anggota'),
            'npm' => $this -> request -> getVar('npm'),
            'id_bidang' => $this -> request -> getVar('bidang'),
            'id_prodi' => $this -> request -> getVar('prodi'),
            'id_jabatan' => $this -> request -> getVar('status_jabatan'),
            'periode' => $this -> request -> getVar('periode'),
        ];

        $mahasiswaModel->update($id, $data);
        return redirect()->to('/');
    }
}
