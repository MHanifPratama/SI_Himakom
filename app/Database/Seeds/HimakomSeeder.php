<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class HimakomSeeder extends Seeder
{
    public function run()
    {
        $dataBidang = [
            [
                'nama_bidang'  =>  'Presidium',
                'visi'  => 'Menjadikan Himakom yang lebih unggul dan berperan aktif dalam jurusan ilmu komputer, bersinergi, konsisten, serta bertanggung jawab dalam setiap amanah yang diberikan.',
                'misi'  =>  'Membantu mahasiswa jurusan ilmu komputer untuk mengembangkan ide kreatif dalam bidang akademik dan non akademik.
                Meningkatkan empati kebersamaan antar mahasiswa jurusan ilmu komputer.
                Membangun hubungan dan kerja sama yang baik antar civitas akademika jurusan ilmu komputer.
                Memberikan wadah aspirasi kepada mahasiswa jurusan ilmu komputer.',
                'logo_bidang'  => 'Presidium.png',
            ],
            [
                'nama_bidang'  =>  'Badan Khusus',
                'visi'  => 'Memelihara  kepercayaan dan hubungan yang baik antara  jurusan Ilmu Komputer dengan Himakom serta menjadikan komponen asistensi laboratorium jurusan Ilmu Komputer yang dapat bersinergi, unggul, dan berkualitas',
                'misi'  =>  'Menjaga hubungan baik antara Himakom dengan kepala dan pengurus laboratorium Jurusan Ilmu Komputer.
                Mempersiapkan asisten dosen yang kreatif, komunikatif, dan bertanggung jawab.
                Memberdayakan fasilitas laboratorium Jurusan Ilmu Komputer untuk kelancaran kegiatan asistensi secara maksimal.
                Membangun dan menjaga komunikasi  yang baik antar sesama asisten dosen serta asisten dosen dengan badan khusus.',
                'logo_bidang'  => 'Bansus.png',
            ],
            [
                'nama_bidang'  =>  'Kaderisasi',
                'visi'  => 'Mewujudkan kaderisasi Himakom Universitas Lampung yang berjiwa kepemimpinan, bertanggung jawab, totalitas dalam berorganisasi, serta menanamkan sikap disiplin.',
                'misi'  =>  'Menanamkan sikap tanggung jawab dan disiplin waktu khususnya pada setiap individu dalam kader himakom.
                Menciptakan rasa kepedulian dan kekeluargaan dalam setiap kegiatan yang di selenggarakan oleh himakom.
                Mengoptimalkan fungsi pengkaderan yang baik dalam mewujudkan jiwa kepemimpinan dalam setiap calon kader himakom.',
                'logo_bidang'  => 'Kaderisasi.png',
            ],
            [
                'nama_bidang'  =>  'Keilmuan',
                'visi'  => 'Mengembangkan Potensi minat bakat Mahasiswa Jurusan Ilmu Komputer Universitas Lampung agar menjadi mahasiswa yang berkompeten dan memiliki daya saing di bidang teknologi informasi di lingkup Ilmu Komputer FMIPA Universitas Lampung',
                'misi'  =>  'Menginovasi, melanjutkan, dan mendayagunakan program kerja yang dapat memperluas pengetahuan bidang teknologi informasi di lingkup Jurusan Ilmu Komputer FMIPA Universitas Lampung.
                Memfasilitasi pengembangan minat bakat melalui kegiatan yang melatih soft skill, hard skill, dan life skill yang dapat mendukung peningkatan prestasi serta keterampilan mahasiswa melalui kerjasama dengan pihak Jurusan Ilmu Komputer FMIPA Universitas Lampung.
                Menyalurkan sarana informasi yang dapat menunjang pengetahuan terkait teknologi informasi setiap mahasiswa Jurusan Ilmu Komputer FMIPA Universitas Lampung.',
                'logo_bidang'  => 'Keilmuan.png',
            ],
            [
                'nama_bidang'  =>  'Internal',
                'visi'  => 'Memperkuat ikatan yang solid dan harmonis antar anggota Himpunan Jurusan Ilmu Komputer guna mewujudkan hubungan baik antar civitas akademika Jurusan Ilmu Komputer.',
                'misi'  =>  'Membentuk hubungan yang lebih erat antar civitas akademika Jurusan Ilmu komputer.

                Meningkatkan komunikasi yang baik untuk memperkuat solidaritas dalam kepengurusan Himpunan Mahasiswa Jurusan Ilmu Komputer.',
                'logo_bidang'  => 'Internal.png',
            ],
            [
                'nama_bidang'  =>  'Eksternal',
                'visi'  => 'Menciptakan dan Menjaga relasi yang baik sebagai penghubung antar pihak luar maupun dalam Universitas Lampung agar terbentuk karakter yang berkualitas serta aktif berperan untuk meningkatkan eksistensi HIMAKOM.',
                'misi'  =>  'Menciptakan serta menjaga hubungan baik antar Lembaga Kemahasiswaan dan Organisasi didalam maupun luar Universitas Lampung.

                Mewujudkan program kerja yang telah dibuat untuk memajukan rasa simpati antar sesama.
                
                Berpartisipasi dan menjalin hubungan yang baik dengan instansi di Bandar Lampung.',
                'logo_bidang'  => 'Eksternal.png',
            ],
            [
                'nama_bidang'  =>  'Media dan Informasi',
                'visi'  => 'Menjadikan bidang Medinfo sebagai bidang yang berperan aktif dalam menyampaikan informasi yang aktual, komunikatif, konsisten dan bertanggung jawabmelalui Himakom di dalam maupun di luar lingkungan FMIPA UNILA.',
                'misi'  =>  'Menyampaikan informasi dan dokumentasi yang aktual dalam publikasi kegiatan Himakom.
                Optimal dalam mengelola media publikasi dan media sosial Himakom.
                Mengadakan pelatihan multimedia kepada Mahasiswa Baru Ilmu Komputer 2022 dan internal Himakom demi meningkatkan
                kemampuan multimedia.
                Memperkenalkan Himakom di Lingkungan FMIPA UNILA dengan mengadakan pelatihan multimedia.
                Meningkatkan kerjasama dan kreatifitas anggota Bidang Medinfo.',
                'logo_bidang'  => 'Medinfo.png',
            ],
            [
                'nama_bidang'  =>  'Biro Kesekretariatan',
                'visi'  => 'Mewujudkan Biro Kesekretariatan sebagai central data dalam manajemen administrasi dan inventarisasi demi menciptakan Himakom yang lebih unggul.',
                'misi'  =>  'Sebagai pusat data dalam penyelenggaraan administrasi dan memenuhi kepentingan kesekretariatan
                Bekerja sama dengan Sekretaris Umum dalam mengelola administrasi internal Himakom
                Pendokumentasian surat dilaksanakan dengan konsisten dan terstruktur, guna memaksimalkan kinerja Biro Kesekretariatan',
                'logo_bidang'  => 'KSR.png',
            ],
            [
                'nama_bidang'  =>  'Biro Kewirausahaan',
                'visi'  => 'Menjadi pusat kewirausahaan yang andal dibidang pembinaan dan pengembangan usaha yang inovasi, mandiri dan terkemuka sehingga memiliki daya saing baik.',
                'misi'  =>  'Memanfaatkan semua peluang yang ada untuk mencari dana.
                Mampu bergerak secara aktif dalam mencari pendanaan untuk financial Himakom Unila.
                Dapat mengamati secara cermat, efektif, dan efisien setiap peluang yang ada.
                Membangun jaringan dan dukungan demi kelancaran dan usaha dan keuangan yang dilakukan.',
                'logo_bidang'  => 'KWU.png',
            ],
            // [
            //     'nama_bidang'  =>  'Tidak Ada',
            //     'visi'  => 'Tidak Ada',
            //     'misi'  =>  'Tidak Ada',
            //     'logo_bidang'  => 'cat-who.jpg',
            // ],
        ];
        $dataProdi = [
            [
                'nama_prodi'  =>  'S1 Ilmu Komputer'
            ],
            [
                'nama_prodi'  =>  'D3 Manajemen Informatika'
            ]
        ];
        $dataKepanitiaan = [
            [
                'nama_kepanitiaan'  =>  'Tidak Menjadi Panitia',
                'id_bidang'  =>  '10',
            ],
            [
                'nama_kepanitiaan'  =>  'Pekan Raya Jurusan',
                'id_bidang'  =>  '1',
            ],
            [
                'nama_kepanitiaan'  =>  'Perekrutan Asisten Dosen',
                'id_bidang'  =>  '2',
            ],
            [
                'nama_kepanitiaan'  =>  'PRINTER',
                'id_bidang'  =>  '3',
            ],
            [
                'nama_kepanitiaan'  =>  'Workshop Wawancara Kerja',
                'id_bidang'  =>  '4',
            ],
            [
                'nama_kepanitiaan'  =>  'KOKOM',
                'id_bidang'  =>  '5',
            ],
            [
                'nama_kepanitiaan'  =>  'Logical',
                'id_bidang'  =>  '6',
            ],
            [
                'nama_kepanitiaan'  =>  'Podcast Himakom',
                'id_bidang'  =>  '7',
            ],
            [
                'nama_kepanitiaan'  =>  'Pelatihan SPIA dan SPIK',
                'id_bidang'  =>  '8',
            ],
            [
                'nama_kepanitiaan'  =>  'Pelatihan Kewirausahaan',
                'id_bidang'  =>  '9',
            ],
        ];
        $dataJabatan =[
            [
                'nama_jabatan'  =>  'Ketua Umum',
            ],
            [
                'nama_jabatan'  =>  'Wakil Ketua Umum',
            ],
            [
                'nama_jabatan'  =>  'Sekretaris Umum',
            ],
            [
                'nama_jabatan'  =>  'Bendahara Umum',
            ],
            [
                'nama_jabatan'  =>  'Kepala Bidang',
            ],
            [
                'nama_jabatan'  =>  'Serkretaris Bidang',
            ],
            [
                'nama_jabatan'  =>  'Bendahara Bidang',
            ],
            [
                'nama_jabatan'  =>  'Anggota Bidang',
            ],
        ];
        $dataBiodata = [
            [
                'nama_anggota'  =>  'Achmad Amru Ghaly',
                'npm'  =>  '2007051003',
                'id_bidang'  =>  '1',
                'id_prodi'  =>  '2',
                'id_jabatan'  =>  '1',
                'id_status_kepanitiaan'  =>  '1',
                'periode'  =>  '2022',
            ],
            [
                'nama_anggota'  =>  'Ahmad Abdan Syakuro',
                'npm'  =>  '2017051067',
                'id_bidang'  =>  '1',
                'id_prodi'  =>  '1',
                'id_jabatan'  =>  '2',
                'id_status_kepanitiaan'  =>  '1',
                'periode'  =>  '2022',
            ],
            [
                'nama_anggota'  =>  'Adiwijaya Satria Nusantara',
                'npm'  =>  '2017051006',
                'id_bidang'  =>  '1',
                'id_prodi'  =>  '1',
                'id_jabatan'  =>  '3',
                'id_status_kepanitiaan'  =>  '1',
                'periode'  =>  '2022',
            ],
            [
                'nama_anggota'  =>  'Annida Putri Saganta',
                'npm'  =>  '2007051045',
                'id_bidang'  =>  '1',
                'id_prodi'  =>  '2',
                'id_jabatan'  =>  '4',
                'id_status_kepanitiaan'  =>  '1',
                'periode'  =>  '2022',
            ],
            [
                'nama_anggota'  =>  'Alif Akbar Kartadinata',
                'npm'  =>  '2007051045',
                'id_bidang'  =>  '2',
                'id_prodi'  =>  '1',
                'id_jabatan'  =>  '5',
                'id_status_kepanitiaan'  =>  '1',
                'periode'  =>  '2022',
            ],
            [
                'nama_anggota'  =>  'Regita Rose Prameswari',
                'npm'  =>  '2017051017',
                'id_bidang'  =>  '2',
                'id_prodi'  =>  '1',
                'id_jabatan'  =>  '6',
                'id_status_kepanitiaan'  =>  '1',
                'periode'  =>  '2022',
            ],
            [
                'nama_anggota'  =>  'Dina Nabila',
                'npm'  =>  '2007051041',
                'id_bidang'  =>  '2',
                'id_prodi'  =>  '2',
                'id_jabatan'  =>  '7',
                'id_status_kepanitiaan'  =>  '1',
                'periode'  =>  '2022',
            ],
            [
                'nama_anggota'  =>  'Dimas Ageng Triyasa',
                'npm'  =>  '2007051063',
                'id_bidang'  =>  '3',
                'id_prodi'  =>  '2',
                'id_jabatan'  =>  '5',
                'id_status_kepanitiaan'  =>  '1',
                'periode'  =>  '2022',
            ],
            [
                'nama_anggota'  =>  'Ajeng Alifah Rizqy',
                'npm'  =>  '2007051019',
                'id_bidang'  =>  '3',
                'id_prodi'  =>  '2',
                'id_jabatan'  =>  '6',
                'id_status_kepanitiaan'  =>  '1',
                'periode'  =>  '2022',
            ],
            [
                'nama_anggota'  =>  'Nesa Dwi Cahyani',
                'npm'  =>  '2017051009',
                'id_bidang'  =>  '3',
                'id_prodi'  =>  '1',
                'id_jabatan'  =>  '7',
                'id_status_kepanitiaan'  =>  '1',
                'periode'  =>  '2022',
            ],
            [
                'nama_anggota'  =>  'M Hanif Pratama',
                'npm'  =>  '2017051040',
                'id_bidang'  =>  '4',
                'id_prodi'  =>  '1',
                'id_jabatan'  =>  '5',
                'id_status_kepanitiaan'  =>  '1',
                'periode'  =>  '2022',
            ],
            [
                'nama_anggota'  =>  'Dita Faradila',
                'npm'  =>  '2017051002',
                'id_bidang'  =>  '4',
                'id_prodi'  =>  '1',
                'id_jabatan'  =>  '6',
                'id_status_kepanitiaan'  =>  '1',
                'periode'  =>  '2022',
            ],
            [
                'nama_anggota'  =>  'Kayla Atsila Ivanka',
                'npm'  =>  '2017051008',
                'id_bidang'  =>  '4',
                'id_prodi'  =>  '1',
                'id_jabatan'  =>  '7',
                'id_status_kepanitiaan'  =>  '1',
                'periode'  =>  '2022',
            ],
            [
                'nama_anggota'  =>  'Fachri Azka Nur',
                'npm'  =>  '2017051054',
                'id_bidang'  =>  '5',
                'id_prodi'  =>  '1',
                'id_jabatan'  =>  '5',
                'id_status_kepanitiaan'  =>  '1',
                'periode'  =>  '2022',
            ],
            [
                'nama_anggota'  =>  'Aniisah Mufiidah Suharso',
                'npm'  =>  '2017051012',
                'id_bidang'  =>  '5',
                'id_prodi'  =>  '1',
                'id_jabatan'  =>  '6',
                'id_status_kepanitiaan'  =>  '1',
                'periode'  =>  '2022',
            ],
            [
                'nama_anggota'  =>  'Aprilia Regina',
                'npm'  =>  '2007051050',
                'id_bidang'  =>  '5',
                'id_prodi'  =>  '2',
                'id_jabatan'  =>  '7',
                'id_status_kepanitiaan'  =>  '1',
                'periode'  =>  '2022',
            ],
            [
                'nama_anggota'  =>  'Putra Dwi Pradana',
                'npm'  =>  '2007051048',
                'id_bidang'  =>  '6',
                'id_prodi'  =>  '2',
                'id_jabatan'  =>  '5',
                'id_status_kepanitiaan'  =>  '1',
                'periode'  =>  '2022',
            ],
            [
                'nama_anggota'  =>  'Intan Sofiatun Nisa',
                'npm'  =>  '2007051015',
                'id_bidang'  =>  '6',
                'id_prodi'  =>  '2',
                'id_jabatan'  =>  '6',
                'id_status_kepanitiaan'  =>  '1',
                'periode'  =>  '2022',
            ],
            [
                'nama_anggota'  =>  'Lara Laylathul Sya’adah',
                'npm'  =>  '2007051052',
                'id_bidang'  =>  '6',
                'id_prodi'  =>  '2',
                'id_jabatan'  =>  '7',
                'id_status_kepanitiaan'  =>  '1',
                'periode'  =>  '2022',
            ],
            [
                'nama_anggota'  =>  'Taufik Nurhidayat',
                'npm'  =>  '2007051037',
                'id_bidang'  =>  '7',
                'id_prodi'  =>  '2',
                'id_jabatan'  =>  '5',
                'id_status_kepanitiaan'  =>  '1',
                'periode'  =>  '2022',
            ],
            [
                'nama_anggota'  =>  'Dyandra Ayu KSP',
                'npm'  =>  '2007051027',
                'id_bidang'  =>  '7',
                'id_prodi'  =>  '2',
                'id_jabatan'  =>  '6',
                'id_status_kepanitiaan'  =>  '1',
                'periode'  =>  '2022',
            ],
            [
                'nama_anggota'  =>  'Shalsa Bila',
                'npm'  =>  '2007051030',
                'id_bidang'  =>  '7',
                'id_prodi'  =>  '2',
                'id_jabatan'  =>  '7',
                'id_status_kepanitiaan'  =>  '1',
                'periode'  =>  '2022',
            ],
            [
                'nama_anggota'  =>  'Raditya Ramadhoni',
                'npm'  =>  '2007051032',
                'id_bidang'  =>  '8',
                'id_prodi'  =>  '2',
                'id_jabatan'  =>  '5',
                'id_status_kepanitiaan'  =>  '1',
                'periode'  =>  '2022',
            ],
            [
                'nama_anggota'  =>  'Nadaa Azhar',
                'npm'  =>  '2007051027',
                'id_bidang'  =>  '8',
                'id_prodi'  =>  '1',
                'id_jabatan'  =>  '6',
                'id_status_kepanitiaan'  =>  '1',
                'periode'  =>  '2022',
            ],
            [
                'nama_anggota'  =>  'Yulia Dwi Putri',
                'npm'  =>  '2017051016',
                'id_bidang'  =>  '8',
                'id_prodi'  =>  '1',
                'id_jabatan'  =>  '7',
                'id_status_kepanitiaan'  =>  '1',
                'periode'  =>  '2022',
            ],
            [
                'nama_anggota'  =>  'Miftahul Ahdiyat',
                'npm'  =>  '2007051049',
                'id_bidang'  =>  '9',
                'id_prodi'  =>  '2',
                'id_jabatan'  =>  '5',
                'id_status_kepanitiaan'  =>  '1',
                'periode'  =>  '2022',
            ],
            [
                'nama_anggota'  =>  'Yeni Adelia',
                'npm'  =>  '2007051005',
                'id_bidang'  =>  '9',
                'id_prodi'  =>  '2',
                'id_jabatan'  =>  '6',
                'id_status_kepanitiaan'  =>  '1',
                'periode'  =>  '2022',
            ],
            [
                'nama_anggota'  =>  'Nesya Anita Putri',
                'npm'  =>  '2007051039',
                'id_bidang'  =>  '9',
                'id_prodi'  =>  '2',
                'id_jabatan'  =>  '7',
                'id_status_kepanitiaan'  =>  '1',
                'periode'  =>  '2022',
            ]

        ];
        $dataAdmin=[
            [
                'nama_admin'  =>  'M Hanif Pratama',
                'email'  =>  'admin@gmail.com',
                'password'  =>  password_hash(12345678,PASSWORD_DEFAULT),
            ],
        ];
        $this->db->table('akun_admin')->insertBatch($dataAdmin);
        $this->db->table('jabatan')->insertBatch($dataJabatan);
        $this->db->table('kepanitiaan')->insertBatch($dataKepanitiaan);
        $this->db->table('prodi')->insertBatch($dataProdi);
        $this->db->table('bidang')->insertBatch($dataBidang);
        $this->db->table('biodata')->insertBatch($dataBiodata);
    }
}
