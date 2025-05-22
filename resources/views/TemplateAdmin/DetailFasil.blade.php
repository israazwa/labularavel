
    <!-- Walk as if you are kissing the Earth with your feet. - Thich Nhat Hanh -->

<div class="bantu mt-5"></div>
<div class="container">
    <div class="container">
        <div class="row">
        <div class="col-6">
    <table class="table">
        <thead>
            <tr>
                <td>Email</td>
                <td>Nama</td>
                <td>Jenis Laporan</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($key as $fasil): ?>
            <tr>
                <td><?= $fasil['email']; ?></td>
                <td><?= $fasil['nama']; ?></td>
                <td><?= $fasil['jenis']; ?></td>
            </tr>
        </tbody>
    </table>
    <div class="maslh mt-2 bg-warning">
        <div class="container mx-2">
            <h5 class="text-center"><b>PERMASALAHAN</b></h5>
             <div class="mslh"><p><?= $fasil['masalah']; ?></p></div>
             <style>.mslh {
            word-wrap: break-word;
            overflow-wrap: break-word;
            }</style>
        </div>
    </div>
    <?php endforeach; ?>
        </div>
    <div class="col-6">
        <?php foreach($key as $data2): ?>
        <img src="<?= asset($data2['foto']); ?>" alt="Foto" class="img-fluid">
        <?php endforeach; ?>
    </div>
    </div>
    </div>
    
@foreach ($key as $item)
    <form action="{{ url('/fasilitas/delete/' . $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?');">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Hapus</button>
    </form>
@endforeach

</div>