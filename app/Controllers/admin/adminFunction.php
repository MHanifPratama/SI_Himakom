<?php

namespace App\Controllers\admin;
use App\Controllers\BaseController;
use App\Models\admin\Biodata;
use App\Models\admin\Bidang;
use App\Models\admin\Jabatan;
use App\Models\admin\Prodi;
use App\Models\admin\Kepanitiaan;
class adminFunction extends BaseController
{
    public function index()
    {
        $biodata = new Biodata();
        $dataBiodata = $biodata->getAllDataFromAllTable()->orderBy('id_anggota','DESC')->get()->getResultArray();
        $data = [
            'title' => 'Biodata',
            'Biodata' => $dataBiodata
        ];
        return view('admin\anggota\list',$data);
    }
    // public function list_panitia(){
    //     $request = \Config\Services::request();
    //     if($request->uri->getSegment(1)=="list_panitia"){
    //         $data = [
    //             'title' => 'Biodata',
    //             'uri' => 'list_panitia'
    //         ];
    //     }
    //     return view('admin\list_panitia',$data). view("templates\header",$data);
    // }
    public function tambah(){
        $bidang = new Bidang();
        $jabatan = new Jabatan();
        $prodi = new Prodi();
        $kepada = new Kepanitiaan();
        $dataBidang= $bidang->findAll();
        $dataProdi= $prodi->findAll();
        $dataJabatan= $jabatan->findAll();
        $dataKepanitiaan= $kepada->findAll();
        $data = [
            'title' => 'Membuat Biodata',
            'Bidang' => $dataBidang,
            'Jabatan' => $dataJabatan,
            'Prodi' => $dataProdi,
            'Kepanitiaan' => $dataKepanitiaan
        ];
        return view('admin\anggota\tambahAnggota', $data);

    }
    public function simpan(){
        if(!$this->validate([
            'nama_anggota'=>'required',
            'npm'=>'required',
            'bidang'=>'required',
            'prodi'=>'required',
            'status_jabatan'=>'required',
            'periode'=>'required',
            'status_kepanitiaan'=>'required'
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
            'id_status_kepanitiaan' => $this -> request -> getPost('status_kepanitiaan')
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
    public function hapusSemuaData()
    {
        $bidang = new Bidang();
        $jabatan = new Jabatan();
        $prodi = new Prodi();
        $BiodataModel = new Biodata();

        $BiodataModel->delete();
        $jabatan->delete();
        $prodi->delete();
        $bidang->delete();
        
        return redirect()->to('/');
    
    }
    public function edit($id){
        $bidang = new Bidang();
        $jabatan = new Jabatan();
        $prodi = new Prodi();
        $kepada = new Kepanitiaan();
        $dataBidang= $bidang->findAll();
        $dataProdi= $prodi->findAll();
        $dataJabatan= $jabatan->findAll();
        $dataKepanitiaan= $kepada->findAll();
        $BiodataModel = new Biodata();
        $Biodata = $BiodataModel->find($id);
        
        $data = [
            'title' => ' Edit Biodata',
            'Biodata' => $Biodata,
            'Bidang' => $dataBidang,
            'Jabatan' => $dataJabatan,
            'Prodi' => $dataProdi,
            'Kepanitiaan' => $dataKepanitiaan
        ];
        return view('admin\anggota\editAnggota', $data);
    }
    public function update($id){
        if(!$this->validate([
            'nama_anggota'=>'required',
            'npm'=>'required',
            'bidang'=>'required',
            'prodi'=>'required',
            'status_jabatan'=>'required',
            'status_kepanitiaan'=>'required',
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
            'id_status_kepanitiaan' => $this -> request -> getVar('status_kepanitiaan')
        ];

        $mahasiswaModel->update($id, $data);
        return redirect()->to('/');
    }
    public function viewCetak(){
        $biodata = new Biodata();
        $dataBiodata = $biodata->getAllDataFromAllTableOnlyBidang();
        $data = [
            'title' => 'Biodata',
            'Bidang' => $dataBiodata
        ];
        return view('admin\anggota\cetakAnggota', $data);
    }
    
    public function tampilCetak(){
        $biodata = new Biodata();
        $bidang = new Bidang();
        $hasilCount = array();
        $data = $this -> request -> getVar('bidang');
        if ($data=='seluruh'){
            $dataBiodata = $biodata->getAllDataFromAllTable()->orderBy('biodata.id_bidang','ASC')->orderBy('biodata.id_jabatan','ASC')->get()->getResultArray();
            $dataBidang = $bidang->select('nama_bidang')->findAll();
            foreach ($dataBidang as $key){
                foreach ($key as $value){
                    $tmp = $biodata->join('bidang','bidang.id_bidang = biodata.id_bidang')->where('nama_bidang',$value)->countAllResults();
                    $hasilCount[$value]= $tmp;
                }
            }
            $data = [
                'title' => 'Biodata',
                'anggota' => $dataBiodata,
                'hasilPerhitungan' => $hasilCount
            ];
            return view('admin\anggota\printKeseluruhan', $data);
        }
        else{
            $dataBiodata = $biodata->orderBy('biodata.id_jabatan', 'ASC')->searchAnggota($data);
            $data = [
                'title' => 'Biodata',
                'anggota' => $dataBiodata
            ];
            return view('admin\anggota\printHanyaBidang', $data);
        }     
    }
}
