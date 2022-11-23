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
		$laporan = $this->request->getVar('laporan');
		if($laporan=='1'){
			$biodata = new Biodata();
			$bidang = new Bidang();
			$hasilCount = array();
			$data = $this -> request -> getVar('bidang');
			$dataBiodata = $biodata->orderBy('biodata.id_jabatan', 'ASC')->searchAnggota($data);
            $data = [
                'title' => 'Biodata',
                'anggota' => $dataBiodata
            ];
            return view('admin\anggota\printHanyaBidang', $data);
			
		}
		$a = session()->get('id_bidang');
		$Kepanitiaan = new Kepanitiaan();
		$dataKepanitiaan = $Kepanitiaan->where('id_bidang',$a)->get()->getResultArray();
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
		$kegiatan = $this-> request -> getPost('nama_kegiatan');
		$division = $this -> request -> getPost('divisi');
		$koor = $this -> request -> getPost('koordinator');
		$sekoor = $this -> request -> getPost('sekretaris_koordinator');
		$anggota = $this -> request -> getPost('anggota');
		$ketua_pelaksana = $this -> request -> getPost('ketua_pelaksana');
		$sekretaris_pelaksana = $this -> request -> getPost('sekretaris_pelaksana');
		$bendahara_pelaksana = $this -> request -> getPost('bendahara_pelaksana');

		$data=[
			'kegiatan' => $kegiatan,
			'division' => $division,
			'koor' => $koor,
			'sekoor' => $sekoor,
			'anggota' => $anggota,
			'ketua_pelaksana' => $ketua_pelaksana,
			'sekretaris_pelaksana' => $sekretaris_pelaksana,
			'bendahara_pelaksana' => $bendahara_pelaksana
		];
		return view('pimpinan\laporan\sk', $data);

		// echo $koor[0];
		// echo $koor[1];
		// echo $koor[2];
		// echo $anggota[2][0];
		// echo print_r($koor);
		// echo print_r($sekoor);
		// echo $anggota[0];
		// echo count($anggota);
		// echo print_r($anggota);
		// $tmp = 0;
		// $x = 0;
		// foreach ($division as $div){
		// 	echo "<br>";
		// 	echo $div;
		// 	echo "<br>";
		// 	echo $koor[$tmp];
		// 	echo "<br>";
		// 	echo $sekoor[$tmp];
		// 	echo "<br>";
		// 	for ($x ; $x < count($anggota); $x++){
		// 		if ($anggota[$x] == 'anggota'){
		// 			// continue;
		// 			$x++;
		// 			break;
		// 		}
		// 		else{
		// 			echo $anggota[$x];
		// 			echo "<br>";
		// 		}
		// 	}
		// 	$tmp++;
		// }
	}
}