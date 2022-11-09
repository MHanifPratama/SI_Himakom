<?php

namespace App\Controllers\pimpinan;

use App\Controllers\BaseController;
use App\Models\Admin\Bidang;
use App\Models\Admin\Biodata;
use App\Models\Admin\Jabatan;
use App\Models\Admin\Kepanitiaan;
use App\Models\Admin\Prodi;

class laporanFunction extends BaseController{
    public function list_laporan(){
        return view('pimpinan\laporan\listLaporan');
    }


	public function cetak_sk()
	{
		$Kepanitiaan = new Kepanitiaan();
		$dataKepanitiaan = $Kepanitiaan->findAll();
		$BiodataModel = new Biodata();
		$Biodata = $BiodataModel->join('bidang','bidang.id_bidang = biodata.id_bidang')
        ->join('prodi','prodi.id_prodi =biodata.id_prodi')
        ->join('jabatan','jabatan.id_jabatan = biodata.id_jabatan')
        ->join('kepanitiaan','kepanitiaan.id_status_kepanitiaan = biodata.id_status_kepanitiaan')->findAll();
		$data = [
			'title' => 'Laporan',
			'Biodata' => $Biodata,
			'Kepanitiaan' => $dataKepanitiaan
		];
		return view('pimpinan\laporan\cetakSK', $data);
	}
}