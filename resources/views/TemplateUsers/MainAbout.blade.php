<script src="//unpkg.com/alpinejs" defer></script>
<section>
    <div class="containerd d-flex align-items-center justify-content-center my-5" x-data="{ activeButton: 1 }">
        <div class="row align-items-center"> <!-- Tambahkan align-items-center pada row -->
            <div class="col-md-6 col-sm-12">
                <!-- Konten yang akan ditampilkan berdasarkan activeButton -->
                <div class="isi mx-4" x-show="activeButton === 1" id="cina">
                    <p class="text-center">-- <b>Visi</b> --</p>
                    <p style="text-align: justify;">Menjadi platform pelaporan perpustakaan yang andal, transparan, dan inovatif dalam mendukung pengelolaan informasi dan pengembangan literasi di lingkungan pendidikan.!</p>
                    <p class="text-center">-- <b>Misi</b> --</p>
                    <p style="text-align: justify;">- Menyediakan sistem pelaporan buku dan fasilitas perpustakaan yang mudah diakses dan efisien.
<br>- Mendukung pengambilan keputusan berbasis data melalui laporan yang akurat dan terstruktur.
<br>- Mendorong peningkatan kualitas layanan perpustakaan melalui pemantauan dan evaluasi berkala.
<br>- Menjadi sarana kolaboratif antara pustakawan, pengelola, dan pemangku kepentingan dalam pengembangan perpustakaan yang berkelanjutan.
</p>
                </div>

                <div class="isi mx-4" x-show="activeButton === 2" id="cina">
                    <div class="row justify-content-center">
                        <div class="col-6 d-flex justify-content-center">
                            <img src="<?= url('logo.png'); ?>" alt="logo" style="max-width: 100%; height: auto;">
                        </div>
                    </div>
                    <h6>Filosofi</h6>
                   <p style="text-align: justify;">Filosofi dari logo LABU mencerminkan harmoni antara pengetahuan dan keindahan alam, menggambarkan perjalanan belajar sebagai proses yang dinamis dan penuh warna. Labu oranye yang ditempatkan di atas buku tertutup melambangkan kematangan dan panen ilmu, menunjukkan bahwa dari setiap proses pembelajaran muncul hasil yang berharga, layaknya buah panen dari kerja keras yang dipupuk dengan penuh dedikasi. Elemen dekoratif seperti daun, bintang, dan titik-titik menambah nuansa keajaiban dan kreativitas, mengisyaratkan bahwa pengetahuan berevolusi seiring waktu dan pertemuan berbagai ide yang inspiratif. Kombinasi warna yang cerah dan elemen visual ini mengajak setiap penggiat literasi untuk terus mengeksplorasi, mengungkap, dan merayakan kekayaan informasi serta nilai-nilai pendidikan dalam setiap langkah mereka.
                </p>
            </div>

                <div class="isi mx-4" x-show="activeButton === 3" id="cina">
                    <div class="row justify-content-center">
                    </div>
                    <p style="text-align: justify;">Kelembagaan platform LABU yang terjalin dengan Universitas Dian Nuswantoro dirancang sebagai sistem sinergis yang menggabungkan keunggulan teknologi informasi dan kekuatan akademik. Dalam struktur kelembagaan ini, UDINUS berperan strategis dengan menyediakan dukungan berupa sumber daya manusia, keahlian penelitian, dan pengawasan administrasi yang tersusun melalui unit-unit seperti perpustakaan, fakultas, dan biro kerjasama. Kerjasama ini diatur melalui perjanjian formal yang jelas, di mana masing-masing pihak memiliki tugas dan tanggung jawab—UDINUS memastikan mutu, akurasi, dan keberlanjutan data pelaporan, sedangkan LABU menyediakan platform digital terintegrasi untuk mengelola laporan buku dan fasilitas perpustakaan. Sinergi kelembagaan ini mendorong peningkatan layanan, transparansi, dan inovasi dalam pengelolaan perpustakaan sebagai bagian integral dari pengembangan literasi dan penyebaran ilmu pengetahuan di lingkungan akademik.</p>
                </div>

                <div class="isi mx-4" x-show="activeButton === 4" id="cina">
                    <div class="row justify-content-center">
                    </div>
                    <p style="text-align: justify;">Universitas Dian Nuswantoro (UDINUS) memiliki sejarah yang dinamis, bermula dari lembaga kursus komputer IMKA yang didirikan pada tahun 1986 di Semarang. Dengan semangat inovasi, sekelompok ilmuwan dan ahli komputer kemudian membentuk Yayasan Dian Nuswantoro, yang secara resmi diresmikan pada tahun 1990 melalui SK Mendikbud sebagai Akademi Manajemen Informatika dan Komputer (AMIK Dian Nuswantoro). Transformasi signifikan terjadi pada tahun 1994 ketika AMIK Dian Nuswantoro berubah menjadi Sekolah Tinggi Manajemen Informatika dan Komputer (STMIK) Dian Nuswantoro, menandai awal perjalanan institusi pendidikan tinggi yang terus berkembang. Seiring waktu, UDINUS menambah fakultas dan program studi baru, menjadikannya salah satu perguruan tinggi swasta terkemuka di Indonesia yang berkomitmen pada peningkatan kualitas pendidikan dan daya saing bangsa</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 mt-4 justify-content-center">
                <!-- pke alpinejs soale ez -->
                <div class="container mx-1 my-3">
                    <a href="#cina">
                        <div class="tombolAbout" @click="activeButton = 1">Visi Misi</div>
                    </a>
                    <a href="#cina">
                        <div class="tombolAbout" @click="activeButton = 2">Filosofi Logo</div>
                    </a>
                    <a href="#cina">
                        <div class="tombolAbout" @click="activeButton = 3">Kelembagaan</div>
                    </a>
                    <a href="#cina">
                        <div class="tombolAbout" @click="activeButton = 4">Sejarah</div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <style>
        .tombolAbout {
            text-align: center;
            background: rgb(255, 89, 0);
            border-radius: 4px;
            padding: 8px 4px;
            margin: 4px 50px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .tombolAbout:hover {
            background: rgb(137, 48, 0);
            transform: scale(0.94);
        }

        a {
            text-decoration: none;
            color: white;
        }
    </style>
</section>