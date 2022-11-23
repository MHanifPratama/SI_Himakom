<?php

namespace App\Controllers\admin;
use App\Controllers\BaseController;
use App\Models\admin\AkunAdmin;
use App\Models\admin\Bidang;
use App\Models\admin\AkunBidang;

class akunBidangFunction extends BaseController
{
    public function list_akun_bidang(){
        $model = new AkunBidang();
        $data['akun_bidang'] = $model->join('bidang','bidang.id_bidang = akun_bidang.id_bidang')->findAll();
        return view('admin\akunBidang\listAkunBidang', $data);
    }
    public function tambah(){
        $model = new Bidang();
        // $data['bidang'] = $model->findAll();
        $data = [
            'bidang' => $model->findAll(),
        ];
        return view('admin\akunBidang\tambahAkunBidang', $data);
    }
    public function simpan(){
        if(!$this->validate([
            'id_bidang'=>'required',
            'username'=>'required',
            'password'=>'required',
        ])){
            return redirect()->to('/tambahAkunBidang');
        }else{
            $model = new AkunBidang();
            $data = [
                'id_bidang' => $this->request->getPost('id_bidang'),
                'username' => $this->request->getPost('username'),
                'password' => password_hash($this->request->getPost('password'),PASSWORD_DEFAULT),
            ];
            $model->save($data);
            return redirect()->to('/listAkunBidang');
        }
    }
    public function hapus($id){
        $model = new AkunBidang();
        $model->delete($id);
        return redirect()->to('/listAkunBidang');
    }
    public function edit ($id){
        $model = new AkunBidang();
        $modelBidang = new Bidang();
        $data['akun_bidang'] = $model->join('bidang','bidang.id_bidang = akun_bidang.id_bidang')->where('id_akun_bidang',$id)->first();
        $data['Bidang']=$modelBidang->findAll();
        return view('admin\akunBidang\editAkunBidang', $data);
    }
    public function update($id){
        if(!$this->validate([
            'id_bidang'=>'required',
            'username'=>'required',
            'password'=>'required',
        ])){
            return redirect()->to('/editAkunBidang/'.$id);
        }
        $model = new AkunBidang();
        $id = $this->request->getPost('id_akun_bidang');
        $data = [
            'id_bidang' => $this->request->getPost('id_bidang'),
            'username' => $this->request->getPost('username'),
            'password' => password_hash($this->request->getPost('password'),PASSWORD_DEFAULT),
        ];
        $model->update($id,$data);
        return redirect()->to('/listAkunBidang');
    }
    
}