<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
</div>
<div class="container mt-4">
    <div class="texth3 fs-3 text-center">Statistik Laporan</div>
    <div class="container">
        <!-- Nanti duluu -->
    </div>
</div>
<div class="container">
    <div class="table table-responsive">
        <table class="table table-stripped">
            <thead>
                <td>No.</td>
                <td class="text-center">Jenis laporan</td>
                <td class="text-center">Laporan</td>
            </thead>
            <?php foreach($fasilitas as $b): ?>
            <tbody>
                <td><?= $b['id']; ?></td>
                <td class="text-center"><?= $b['jenis']; ?></td>
                <td class="text-center"><?= $b['masalah']; ?></td>
            </tbody>
            <?php endforeach; ?>
        </table>
    </div>
</div>