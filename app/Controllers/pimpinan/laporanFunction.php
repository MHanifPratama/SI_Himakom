<?php

namespace App\Controllers\pimpinan;
use App\Controllers\BaseController;

class laporanFunction extends BaseController{
    public function list_laporan(){
        return view('pimpinan\laporan\listLaporan');
    }
}