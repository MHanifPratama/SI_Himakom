<?php

namespace App\Controllers\admin;
use App\Controllers\BaseController;
use App\Models\admin\AkunAdmin;

class loginFunction extends BaseController
{
    public function viewLogin(){
        return view('admin\loginAdmin\login');
    }
    public function verifyLoginAdmin(){
        $model = new AkunAdmin();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');
        $data = $model->where('email', $email)->first();
        if($data){
            $pass = $data['password'];
            $verify_pass = password_verify($password, $pass);
            if($verify_pass){
                $ses_data = [
                    'id'       => $data['id_admin'],
                    'nama'     => $data['nama_admin'],
                    'email'    => $data['email'],
                    'login_admin'     => TRUE
                ];
                session()->set($ses_data);
                return redirect()->to('/list_anggota',);
            }
            else{
                session()->setFlashdata('msg', 'Wrong Password');
                // return redirect()->to('/loginAdmin');
                echo 'salah password';
            }
        }
        else{
            session()->setFlashdata('msg', 'Email not Found');
            // return redirect()->to('/loginAdmin');
            echo 'salah email';
        }
    }

    public function logoutAdmin(){
        $session = session();
        $session->destroy();
        return redirect()->to('/loginAdmin');
    }

}