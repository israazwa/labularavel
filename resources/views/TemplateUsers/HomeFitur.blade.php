<style>
    body {
        margin: 0;
        /* Hilangkan margin pada body */
    }

    .container-fluid {
        padding: 0;
        margin: 0;
        width: 100%;
        /* Pastikan kontainer mengambil seluruh lebar layar */
    }

    .rowC {
        display: flex;
        flex-wrap: nowrap;
        margin: 0;
        padding: 0;
        width: 100%;
        /* Pastikan row juga memenuhi lebar layar */
        overflow-x: auto;
        /* Scroll horizontal jika diperlukan */
    }

    .section {
        flex: 1 0 auto;
        /* Pastikan elemen menyesuaikan ukurannya */
        position: relative;
        overflow: hidden;
        text-align: center;
        /* Gunakan ukuran default untuk height dan width */
        width: var(--card-width, 300px);
        /* Default width, bisa diubah lewat CSS variabel */
        height: var(--card-height, 400px);
        /* Default height, bisa diubah lewat CSS variabel */
        margin: 0px;
        /* Tambahkan sedikit spasi antar card */
        /*border: 1px solid #ddd;*/
        /* Batasan untuk visual card */
    }

    .section img {
        width: 100%;
        /* Gambar menyesuaikan lebar card */
        height: 100%;
        /* Gambar menyesuaikan tinggi card */
        object-fit: cover;
        /* Isi card tanpa memotong gambar */
        filter: grayscale(100%);
        transition: all 0.3s ease;
    }

    .section:hover img {
        filter: none;
        transform: scale(1.1);
    }

    .section .caption {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(255, 119, 0, 0.87);
        color: #fff;
        padding: 10px;
        font-size: 1rem;
        height: 70px;
        transition: all 0.3s ease;
    }

    .section:hover .caption {
        height: 120px;
        /* Tambahkan tinggi caption saat hover */
        background-color: rgb(252, 208, 10);
    }
</style>
<div class="container-fluid">
    <div class="rowC">
        <div class="section">
            <a href="/laporan/buku"><img src="<?= url('logo.png'); ?>" alt="##">
                <div class="caption">Draft Laporan Buku</div>
            </a>
        </div>
        <div class="section">
            <a href="/laporan/fasilitas"><img src="<?= url('logo.png'); ?>" alt="###">
                <div class="caption">Draft Laporan Fasilitas</div>
            </a>
        </div>
        <div class="section">
            <a href="/saran"><img src="<?= url('logo.png'); ?>" alt="S##">
                <div class="caption">Kritik dan/atau Saran</div>
            </a>
        </div>
        <div class="section">
            <a href=""><img src="<?= url('logo.png'); ?>" alt="I#">
                <div class="caption">Statistik Laporan</div>
            </a>
        </div>
    </div>
</div>