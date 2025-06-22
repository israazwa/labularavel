<div>
    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
</div>
<div class="container mt-4">
    @if (session('alert'))
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ session('alert') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

    {{-- Form Pencarian --}}
    <div class="card">
        <div class="card-body">
            <form action="{{ route('stats.search') }}" method="POST" class="row g-3 align-items-center">
                @csrf
                <div class="col-4">
                    <input type="email" name="email" class="form-control" placeholder="Masukkan email..." required>
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary">Cari</button>
                </div>
                <div class="col-6 fs-7">
                    Fitur pencarian ini digunakan untuk konfirmasi data yang sudah diinputkan oleh pengguna.
                </div>
            </form>
        </div>
    </div>

    {{-- Hasil Pencarian --}}
    @if(session('hasilFs') || session('hasilBk'))
        <div class="alert alert-info mt-4">
            Hasil pencarian untuk: <strong>{{ session('keyword') }}</strong>
        </div>

        @if(session('hasilFs'))
            <div class="card mb-3">
                <div class="card-header bg-info text-white">
                    Data Fasilitas
                </div>
                <div class="card-body">
                    <p><strong>Created At:</strong> {{ session('hasilFs')->created_at->format('d M Y, H:i') }}</p>
                    <p><strong>Jenis         : {{ session('hasilFs')->jenis }}</strong></p>
                    <p><strong>Balasan Admin : @if (session('hasilFs') && session('hasilFs')->content)
                            {{ session('hasilFs')->content }}
                        @else
                    <p class="text-muted">Belum ada balasan dari admin.</p>
                        @endif</strong></p>
                </div>
            </div>
        @endif

        @if(session('hasilBk'))
            <div class="card mb-3">
                <div class="card-header bg-warning">
                    Data Buku
                </div>
                <div class="card-body">
                    <p><strong>Created At:</strong> {{ session('hasilBk')->created_at->format('d M Y, H:i') }}</p>
                    <p><strong>Jenis         : {{ session('hasilBk')->jenis }}</strong></p>
                    <p><strong>Balasan Admin : @if (session('hasilBk') && session('hasilBk')->content)
                            {{ session('hasilBk')->content }}
                        @else
                    <p class="text-muted">Belum ada balasan dari admin.</p>
                        @endif</strong></p>
                </div>
            </div>
        @endif
    @endif

</div>