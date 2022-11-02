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
            'logo_bidang' => 'uploaded[logo_bidang]','mime_in[logo_bidang,image/jpg,image/jpeg,image/gif,image/png]','max_size[logo_bidang,4096]',
        ])){
            return redirect()->to('/tambahBidang');
        }
        $BiodataModel = new Bidang();
        $dataBerkas = $this->request->getFile('logo_bidang');
        $namaBerkas = $dataBerkas->getRandomName();
        $data = [
            'nama_bidang' => $this -> request -> getPost('nama_bidang'),
            'visi' => $this -> request -> getPost('visi'),
            'misi' => $this -> request -> getPost('misi'),
            'logo_bidang' => $namaBerkas,
        ];
        $dataBerkas->move(ROOTPATH . 'public/assets/img/logoBidang/', $namaBerkas);
        $BiodataModel->save($data);
        return redirect()->to('/listBidang');
    }
    public function hapus($id)
    {
        $BiodataModel = new Bidang();
        $dataBiodata = $BiodataModel->find($id);
        $berkas = $dataBiodata['logo_bidang'];
        if(file_exists(ROOTPATH . 'public/assets/img/logoBidang/' . $berkas)){
            unlink(ROOTPATH . 'public/assets/img/logoBidang/' . $berkas);
        }
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
        if(!$this->validate([
            'nama_bidang'=>'required',
            'visi'=>'required',
            'misi'=>'required',
            // 'logo_bidang' => 'uploaded[logo_bidang]','mime_in[logo_bidang,image/jpg,image/jpeg,image/gif,image/png]','max_size[logo_bidang,4096]',
        ])){
            return redirect()->to('/tambahBidang');
        }
        
        $BiodataModel = new Bidang();
        $dataBerkasId = $BiodataModel->find($id);
        $dataBerkas = $this->request->getFile('logo_bidang');
        if($dataBerkas->isValid() && !$dataBerkas->hasMoved()){
            $berkasLama = $dataBerkasId['logo_bidang'];
            if(file_exists(ROOTPATH . 'public/assets/img/logoBidang/' . $berkasLama)){
                unlink(ROOTPATH . 'public/assets/img/logoBidang/' . $berkasLama);
            }
            $namaBerkas = $dataBerkas->getRandomName();
            $dataBerkas->move(ROOTPATH . 'public/assets/img/logoBidang/', $namaBerkas);
        }
        else{
            $namaBerkas = $dataBerkasId['logo_bidang'];
        }

        $data = [
            'nama_bidang' => $this -> request -> getPost('nama_bidang'),
            'visi' => $this -> request -> getPost('visi'),
            'misi' => $this -> request -> getPost('misi'),
            'logo_bidang' => $namaBerkas,
        ];
        $BiodataModel->update($id,$data);
        return redirect()->to('/listBidang');
    }

}