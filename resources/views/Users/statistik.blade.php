<head>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
</div>



<div class="container mt-4">
    <div class="text-center mb-4">
        <h2 class="fw-bold">Statistik Laporan Perpustakaan</h2>
    </div>

    <div class="row justify-content-center">
        <!-- Kartu Fasilitas -->
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm border-0 text-center">
                <div class="card-header bg-info text-white">
                    Fasilitas
                </div>
                <div class="card-body">
                    <h3 class="fw-bold"><?= count($fasilitas) ?></h3>
                </div>
            </div>
        </div>

        <!-- Kartu Buku -->
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm border-0 text-center">
                <div class="card-header bg-warning text-dark">
                    Buku
                </div>
                <div class="card-body">
                    <h3 class="fw-bold"><?= count($buku) ?></h3>
                </div>
            </div>
        </div>

        <!-- Kartu Kritik & Saran -->
        <div class="col-md-4 mb-3">
            <div class="card shadow-sm border-0 text-center">
                <div class="card-header bg-danger text-white">
                    Kritik & Saran
                </div>
                <div class="card-body">
                    <h3 class="fw-bold"><?= count($saran) ?></h3>
                </div>
            </div>
        </div>
    </div>
</div>

<h4 class="mt-5 mb-3 text-center">Grafik Laporan</h4>

<div class="table-responsive">
    <canvas id="laporanChart" style="min-width: 700px; height: 400px;"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const labels = <?= json_encode($dates); ?>;
const fasilitasData = <?= json_encode($data_fasilitas); ?>;
const bukuData = <?= json_encode($data_buku); ?>;
const saranData = <?= json_encode($data_saran); ?>;

const ctx = document.getElementById('laporanChart').getContext('2d');
new Chart(ctx, {
    type: 'line',
    data: {
        labels: labels,
        datasets: [
            {
                label: 'Fasilitas',
                data: labels.map(tgl => fasilitasData[tgl] ?? 0),
                borderColor: 'rgba(54, 162, 235, 1)',
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                fill: true
            },
            {
                label: 'Buku',
                data: labels.map(tgl => bukuData[tgl] ?? 0),
                borderColor: 'rgba(255, 206, 86, 1)',
                backgroundColor: 'rgba(255, 206, 86, 0.2)',
                fill: true
            },
            {
                label: 'Kritik & Saran',
                data: labels.map(tgl => saranData[tgl] ?? 0),
                borderColor: 'rgba(255, 99, 132, 1)',
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                fill: true
            }
        ]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        interaction: { mode: 'index', intersect: false },
        plugins: {
            title: {
                display: true,
                text: 'Statistik Laporan Harian'
            }
        },
        scales: {
            x: {
                ticks: {
                    maxRotation: 45,
                    minRotation: 45,
                    autoSkip: true,
                    maxTicksLimit: 20
                }
            },
            y: {
                beginAtZero: true,
                ticks: { stepSize: 1 }
            }
        }
    }
});
</script>
