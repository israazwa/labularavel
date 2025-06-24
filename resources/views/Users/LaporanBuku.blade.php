<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

{{-- /cari --}}
<div class="bantu mt-5 mb-2">
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active"  href="/laporan/buku">Buku</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/laporan/fasilitas" aria-current="page">Fasilitas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link " href="/saran">Kritik Saran</a>
        </li>
    </ul>
</div>
<header class="fs-xl mb-2 text-center">
    <h2><b>FORM LAPORAN</b></h2>
</header>

<div class="container mx-3 mb-2">
    <form action="/cari" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" name="email">
        </div>
        <button type="submit" class="tombolKirim"><b>Kirim Laporan</b></button>
    </form>
</div>

@if(session('success'))

<div class="container-md">
    <form action="/laporan/buku/kirim" method="post"  enctype="multipart/form-data">
        @csrf
        <div id="emailAlert" class="alert alert-danger" style="display:none;"></div>
        <script>
            function validateEmail() {
                const emailInput = document.getElementById('email').value;
                const alertDiv = document.getElementById('emailAlert');
                if (!emailInput.endsWith('@mhs.dinus.ac.id')) {
                    alertDiv.innerText = 'Email harus menggunakan domain mhs.dinus.ac.id';
                    alertDiv.style.display = 'block';
                    return false;
                }
                alertDiv.style.display = 'none';
                return true;
            }
        </script>

        <div class="card">
            <div class="card-header">Form Laporan Buku</div>

            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-6">
                        <div class="form-floating">
                            <input type="email" class="form-control" id="email" name="email" required placeholder="name@example.com" value="{{session('email')}}" readonly>
                            <label for="floatingInput">Email</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" id="nama" name="nama" required placeholder="username" value="{{ session('nama') }}" readonly>
                            <label for="floatingInput">Username</label>
                        </div>
                    </div>
                </div>
                <div class="mb-3 d-flex">

                    <div class="input-group mb-3">
                     <select class="form-select" aria-label="Jenis Laporan" id="jenis" name="jenis" required>
                        <option value="" disabled selected>Pilih Jenis Laporan</option>
                        <option>Buku Rusak</option>
                        <option>Buku Hilang</option>
                        <option>Lainnya</option>
                    </select>
                    <span class="input-group-text">||</span>
                    <select class="form-select" aria-label="Jenis Laporan" id="jenis" name="kdbo" required>
                        <option value="" disabled selected>Pilih Buku</option>
                      <?php foreach(session('buku', []) as $kdb): ?>
                        <option><?= $kdb; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                </div>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Masalah" style="height: 100px" id="masalah" name="masalah" rows="3" required></textarea>
                    <label for="masalah" class="form-label">Jelaskan Permasalahannya</label>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Foto</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <div style="display: flex; justify-content: center; margin-top: 20px;">
                    <button type="submit" class="tombolKirim"><b>Kirim Laporan</b></button>
                </div>
            </div>
        </div>
    </form>
</div>
@elseif (session('alert'))
<div class="container mx-3">
    <div class="alert alert-danger">
        {{ session('alert') }}
    </div>
</div>
@endif

<style>
    .tombolKirim {
        padding-left: 43px;
        padding-right: 43px;
        padding-top: 7px;
        padding-bottom: 7px;
        background-color: #FF4500;
        color: floralwhite;
        border-radius: 6px;
        border-color: #FF4500;
        align-content: center;
        align-items: center;
        margin-bottom: 30px;
        margin-top: 9px;
    }

    .tombolKirim:hover {
        border-color: rgb(103, 28, 14);
        background-color: rgb(103, 28, 14);
        transition: transform 0.3s ease;
        box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.4);
        transform: scale(0.89);
    }
</style>

<section>
    <div class="container mb-5">
        <div class="text mt-5 mb-2 text-center">
            <h5>5 Laporan Teratas</h5>
            <p>sistem FIFO <i>'first in first out'</i></p>
        </div>
        <div class="table-responsive">
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama</td>
                        <td>Jenis</td>
                        <td>Aduan</td>
                        <td>Tanggal Upload</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $maxData = 5;
                    $totalData = count($record);

                    if ($totalData > 0) {
                        // Tampilkan laporan berdasarkan jumlah data yang ada atau maksimal 5
                        for ($i = 0; $i < min($maxData, $totalData); $i++): ?>
                            <tr>
                                <td><?= $i + 1 ?></td>
                                <td><?= $record[$i]['nama']; ?></td>
                                <td><?= $record[$i]['jenis']; ?></td>
                                <td><?= $record[$i]['content']; ?></td>
                                <td><?= $record[$i]['created']; ?></td>
                            </tr>
                        <?php endfor;
                        if ($totalData < $maxData): ?>
                            <tr>
                                <td colspan="5" class="bg-secondary text-white">
                                    <b>DATA MASUK TIDAK MENCAPAI LIMA</b>
                                </td>
                            </tr>
                        <?php endif;
                    } else { ?>
                        <tr>
                            <td colspan="5" class="bg-secondary text-white"><b>Tidak ada laporan yang masuk.</b></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</section>