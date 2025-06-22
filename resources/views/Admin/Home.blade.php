<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap Bundle JS (termasuk Popper.js) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
    .tombol {
        background-color: rgb(240, 133, 57);
        padding-left: 25px;
        padding-right: 26px;
        padding-top: 5px;
        padding-bottom: 4px;
        border: 0px;
        margin: 5px 6px;
        color: white;
        border-radius: 3px;
        box-shadow: 3px;
        transition: all 0.3s ease;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.4);
    }

    .tombol:hover {
        background-color: rgb(204, 61, 0);
        transform: scale(0.96);
        box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.6);
    }
</style>
<html>

<body>
    <section>
        <div class="container mt-4">
            <h1 class="text-center mb-5">Admin Dashboard</h1>
            <p class="text-center bg-danger text-white"><b>GUNAKAN LAPTOP!</b></p>
            <div class="ctrl">
                <div class="container">
                    <h2>Control Panel</h2>
                    <div class="row">
                        <div class="col-sm-6 d-flex align-items-center">
                            <button class="tombol"
                                onclick="window.location.href='<?php echo url('/admin/heropic'); ?>'">- CRUD
                                -</button>
                            <p class="ms-2 font-monospace"><b>Controller View Home</b></p>
                        </div>
                        <div class="col-sm-6 d-flex align-items-center">
                            <button class="tombol"
                                onclick="window.location.href='<?php echo url('/admin/pengumuman'); ?>'">- CRUD
                                -</button>
                            <p class="ms-2 font-monospace"><b>Controller Pengumuman</b></p>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 d-flex align-items-center">
                            <button class="tombol"
                                onclick="window.location.href='<?php echo url('/admin/fasil'); ?>'">- CRUD
                                -</button>
                            <p class="ms-2 font-monospace"><b>Laporan User</b></p>
                        </div>
                        <div class="col-sm-6 d-flex align-items-center">
                            <button class="tombol disable"
                                onclick="window.location.href='<?php echo url('/debug'); ?>'">Laravel<i class="fab fa-laravel text-white"></i></button>
                            <p class="ms-2 font-monospace"><b>Dokumentasi Laravel</b></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <br>
    <br>
    <section>
        <div class="container mb-5">
            <h5 class="text-center mb-3"><b>Update Ikhtisar</b></h5>
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-9 col-xl-6"><?php foreach ($content as $kl): ?>
                            <p class="text-center bg-secondary text-white p-2 m-3"><b>PREVIEW IKHTISAR LIVE SERVER</b></p>
                            <p style="text-align: justify;" class=" mx-5">
                                <?= $kl['content']; ?>
                            </p>
                            <p class="text-center"><i><b>styleing</i> gunakan html</b></p>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xl-6">
                            <form action="{{ url('/ikhtisarupt/' . $kl['id']) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-floating mb-3">
                                    <input type="text" name="contents" id="contents" class="form-control" id="floatingInput"
                                        placeholder="new ikhtisar">
                                    <label for="floatingInput">masukkan paragraph update</label>
                                </div>
                                <p class="bg-warning mx-2 my-2 p-2 text-center"> Jika <b>Update kosong</b> maka yang
                                    terupload kosong!
                                </p>
                                <button type="button" class="ikhtis" data-bs-toggle="modal"
                                    data-bs-target="#exampleModal">Update!</button>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                    aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">PASTIKAN LAGI!</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Silakan periksa kembali semua informasi agar <span class="span"><b>tidak
                                                            ada
                                                            kesalahan</b></span> sebelum
                                                    menekan tombol 'Update</p>
                                            </div>
                                            <style>
                                                .span {
                                                    background-color: red;
                                                    color: white;
                                                    padding: 3px;
                                                }
                                            </style>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <style>
                                    .ikhtis {
                                        background-color: rgb(240, 133, 57);
                                        padding-left: 25px;
                                        padding-right: 26px;
                                        padding-top: 5px;
                                        padding-bottom: 4px;
                                        border: 0cap;
                                        margin: 5px 6px;
                                        color: white;
                                        border-radius: 3px;
                                        box-shadow: 3px;
                                        transition: all 0.3s ease;
                                        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.4);
                                    }

                                    .ikhtis:hover {
                                        background-color: rgb(70, 98, 8);
                                        transform: scale(0.96);
                                        box-shadow: 0px 6px 10px rgba(0, 0, 0, 0.6);
                                    }
                                </style>
                            </form>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
</body>


</html>