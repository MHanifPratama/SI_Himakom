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
            ],
            [
                'nama_bidang'  =>  'Badan Khusus',
                'visi'  => 'Memelihara  kepercayaan dan hubungan yang baik antara  jurusan Ilmu Komputer dengan Himakom serta menjadikan komponen asistensi laboratorium jurusan Ilmu Komputer yang dapat bersinergi, unggul, dan berkualitas',
                'misi'  =>  'Menjaga hubungan baik antara Himakom dengan kepala dan pengurus laboratorium Jurusan Ilmu Komputer.
                Mempersiapkan asisten dosen yang kreatif, komunikatif, dan bertanggung jawab.
                Memberdayakan fasilitas laboratorium Jurusan Ilmu Komputer untuk kelancaran kegiatan asistensi secara maksimal.
                Membangun dan menjaga komunikasi  yang baik antar sesama asisten dosen serta asisten dosen dengan badan khusus.',
            ],
            [
                'nama_bidang'  =>  'Kaderisasi',
                'visi'  => 'Mewujudkan kaderisasi Himakom Universitas Lampung yang berjiwa kepemimpinan, bertanggung jawab, totalitas dalam berorganisasi, serta menanamkan sikap disiplin.',
                'misi'  =>  'Menanamkan sikap tanggung jawab dan disiplin waktu khususnya pada setiap individu dalam kader himakom.
                Menciptakan rasa kepedulian dan kekeluargaan dalam setiap kegiatan yang di selenggarakan oleh himakom.
                Mengoptimalkan fungsi pengkaderan yang baik dalam mewujudkan jiwa kepemimpinan dalam setiap calon kader himakom.',
            ],
            [
                'nama_bidang'  =>  'Keilmuan',
                'visi'  => 'Mengembangkan Potensi minat bakat Mahasiswa Jurusan Ilmu Komputer Universitas Lampung agar menjadi mahasiswa yang berkompeten dan memiliki daya saing di bidang teknologi informasi di lingkup Ilmu Komputer FMIPA Universitas Lampung',
                'misi'  =>  'Menginovasi, melanjutkan, dan mendayagunakan program kerja yang dapat memperluas pengetahuan bidang teknologi informasi di lingkup Jurusan Ilmu Komputer FMIPA Universitas Lampung.
                Memfasilitasi pengembangan minat bakat melalui kegiatan yang melatih soft skill, hard skill, dan life skill yang dapat mendukung peningkatan prestasi serta keterampilan mahasiswa melalui kerjasama dengan pihak Jurusan Ilmu Komputer FMIPA Universitas Lampung.
                Menyalurkan sarana informasi yang dapat menunjang pengetahuan terkait teknologi informasi setiap mahasiswa Jurusan Ilmu Komputer FMIPA Universitas Lampung.',
            ],
            [
                'nama_bidang'  =>  'Internal',
                'visi'  => 'Memperkuat ikatan yang solid dan harmonis antar anggota Himpunan Jurusan Ilmu Komputer guna mewujudkan hubungan baik antar civitas akademika Jurusan Ilmu Komputer.',
                'misi'  =>  'Membentuk hubungan yang lebih erat antar civitas akademika Jurusan Ilmu komputer.

                Meningkatkan komunikasi yang baik untuk memperkuat solidaritas dalam kepengurusan Himpunan Mahasiswa Jurusan Ilmu Komputer.',
            ],
            [
                'nama_bidang'  =>  'Eksternal',
                'visi'  => 'Menciptakan dan Menjaga relasi yang baik sebagai penghubung antar pihak luar maupun dalam Universitas Lampung agar terbentuk karakter yang berkualitas serta aktif berperan untuk meningkatkan eksistensi HIMAKOM.',
                'misi'  =>  'Menciptakan serta menjaga hubungan baik antar Lembaga Kemahasiswaan dan Organisasi didalam maupun luar Universitas Lampung.

                Mewujudkan program kerja yang telah dibuat untuk memajukan rasa simpati antar sesama.
                
                Berpartisipasi dan menjalin hubungan yang baik dengan instansi di Bandar Lampung.',
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
            ],
            [
                'nama_bidang'  =>  'Biro Kesekretariatan',
                'visi'  => 'Mewujudkan Biro Kesekretariatan sebagai central data dalam manajemen administrasi dan inventarisasi demi menciptakan Himakom yang lebih unggul.',
                'misi'  =>  'Sebagai pusat data dalam penyelenggaraan administrasi dan memenuhi kepentingan kesekretariatan
                Bekerja sama dengan Sekretaris Umum dalam mengelola administrasi internal Himakom
                Pendokumentasian surat dilaksanakan dengan konsisten dan terstruktur, guna memaksimalkan kinerja Biro Kesekretariatan',
            ],
            [
                'nama_bidang'  =>  'Biro Kewirausahaan',
                'visi'  => 'Menjadi pusat kewirausahaan yang andal dibidang pembinaan dan pengembangan usaha yang inovasi, mandiri dan terkemuka sehingga memiliki daya saing baik.',
                'misi'  =>  'Memanfaatkan semua peluang yang ada untuk mencari dana.
                Mampu bergerak secara aktif dalam mencari pendanaan untuk financial Himakom Unila.
                Dapat mengamati secara cermat, efektif, dan efisien setiap peluang yang ada.
                Membangun jaringan dan dukungan demi kelancaran dan usaha dan keuangan yang dilakukan.',
            ],
            [
                'nama_bidang'  =>  'Tidak Ada',
                'visi'  => 'Tidak Ada',
                'misi'  =>  'Tidak Ada',
            ],
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
                'id_bidang'  =>  '9',
            ],
            [
                'nama_kepanitiaan'  =>  'Pekan Raya Jurusan',
                'id_bidang'  =>  '0',
            ],
            [
                'nama_kepanitiaan'  =>  'Perekrutan Asisten Dosen',
                'id_bidang'  =>  '1',
            ],
            [
                'nama_kepanitiaan'  =>  'PRINTER',
                'id_bidang'  =>  '2',
            ],
            [
                'nama_kepanitiaan'  =>  'Workshop Wawancara Kerja',
                'id_bidang'  =>  '3',
            ],
            [
                'nama_kepanitiaan'  =>  'KOKOM',
                'id_bidang'  =>  '4',
            ],
            [
                'nama_kepanitiaan'  =>  'Logical',
                'id_bidang'  =>  '5',
            ],
            [
                'nama_kepanitiaan'  =>  'Logical',
                'id_bidang'  =>  '5',
            ],
            [
                'nama_kepanitiaan'  =>  'Podcast Himakom',
                'id_bidang'  =>  '6',
            ],
            [
                'nama_kepanitiaan'  =>  'Pelatihan SPIA dan SPIK',
                'id_bidang'  =>  '7',
            ],
            [
                'nama_kepanitiaan'  =>  'Pelatihan Kewirausahaan',
                'id_bidang'  =>  '8',
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
                'nama_anggota'  =>  'M Hanif Pratama',
                'npm'  =>  '2017051040',
                'id_bidang'  =>  '4',
                'id_prodi'  =>  '1',
                'id_jabatan'  =>  '5',
                'periode'  =>  '2022',
            ],
            [
                'nama_anggota'  =>  'Dita Faradila',
                'npm'  =>  '2017051002',
                'id_bidang'  =>  '4',
                'id_prodi'  =>  '1',
                'id_jabatan'  =>  '6',
                'periode'  =>  '2022',
            ],
            [
                'nama_anggota'  =>  'Kayla Atsila Ivanka',
                'npm'  =>  '2017051008',
                'id_bidang'  =>  '4',
                'id_prodi'  =>  '1',
                'id_jabatan'  =>  '7',
                'periode'  =>  '2022',
            ]

        ];
        $this->db->table('jabatan')->insertBatch($dataJabatan);
        $this->db->table('biodata')->insertBatch($dataBiodata);
        $this->db->table('kepanitiaan')->insertBatch($dataKepanitiaan);
        $this->db->table('prodi')->insertBatch($dataProdi);
        $this->db->table('bidang')->insertBatch($dataBidang);
    }
}
