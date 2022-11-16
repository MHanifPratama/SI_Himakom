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
	public function tampilCetakSK(){
		// echo $this -> request -> getPost('ketua_pelaksana');
		$division = $this -> request -> getPost('divisi');
		$koor = $this -> request -> getPost('koordinator');
		$sekoor = $this -> request -> getPost('sekretaris_koordinator');
		$anggota = $this -> request -> getPost('anggota');
		// echo $koor[0];
		// echo $koor[1];
		// echo $koor[2];
		// echo $anggota[2][0];
		// echo print_r($koor);
		// echo print_r($sekoor);
		echo print_r($anggota);
		$tmp = 0;
		foreach ($division as $div){
			echo "<br>";
			echo $div;
			echo "<br>";
			echo $koor[$tmp];
			echo "<br>";
			echo $sekoor[$tmp];
			echo "<br>";
			foreach ($anggota[$tmp] as $ang){
				echo $ang;
				echo "<br>";
			}
			$tmp++;
		}
	}
}