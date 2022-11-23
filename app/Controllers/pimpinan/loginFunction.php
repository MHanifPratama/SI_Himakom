<?php

namespace App\Controllers\pimpinan;

use App\Controllers\BaseController;
use App\Models\Admin\Bidang;
use App\Models\Admin\Biodata;
use App\Models\Admin\Jabatan;
use App\Models\Admin\Kepanitiaan;
use App\Models\Admin\Prodi;
use App\Models\Admin\AkunBidang;

class loginFunction extends BaseController{
    public function index(){
        if(session('login_pimpinan')==true){
            return redirect()->to(base_url('/test'));
        }
        return view('pimpinan\loginPimpinan\login');
    }
    public function verifyLogin(){
        $model = new AkunBidang();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        $data = $model->join('bidang','bidang.id_bidang = akun_bidang.id_bidang')->where('username', $username)->first();
        if($data){
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'id'       => $data['id_akun_bidang'],
                    'username'    => $data['username'],
                    'id_bidang' => $data['id_bidang'],
                    'nama_bidang' => $data['nama_bidang'],
                    'logo_bidang' => $data['logo_bidang'],
                    'login_pimpinan'     => TRUE
                ];
                session()->set($ses_data);
                return redirect()->to('/test',);
            }
            else{
                session()->setFlashdata('msg', 'Wrong Password');
                return redirect()->to('/loginPimpinan');
                // echo 'salah password';
            }
        }
        else{
            session()->setFlashdata('msg', 'Username not Found');
            return redirect()->to('/loginPimpinan');
            // echo 'salah username';
        }
        
    }
    public function logoutPimpinan(){
        $session = session();
        $session->destroy();
        return redirect()->to('/loginPimpinan');
    }
}