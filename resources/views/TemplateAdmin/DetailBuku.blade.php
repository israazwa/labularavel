{{-- resources/views/laporan-fasilitas.blade.php --}}
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  {{-- optional: ikon kirim/hapus --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container py-5">
  <div class="row gx-4 gy-5">
    {{-- KIRI: Detail + Form --}}
    <div class="col-lg-6">

      {{-- Card: Detail Laporan --}}
      <div class="card shadow-sm mb-4">
        <div class="card-header bg-white">
          <h5 class="mb-0">Detail Laporan</h5>
        </div>
        <div class="card-body p-0">
            <ul class="list-group list-group-flush">
            @foreach($key as $fasil)
                <li class="list-group-item">
                <strong>Email:</strong> {{ $fasil->email }}
                </li>
                <li class="list-group-item">
                <strong>Nama:</strong> {{ $fasil->nama }}
                </li>
                <li class="list-group-item">
                <strong>Jenis Laporan:</strong> {{ $fasil->jenis }}
                </li>
                <li class="list-group-item">
                <strong>Permasalahan:</strong>
                <p class="mt-2 text-justify mb-0">{{ $fasil->masalah }}</p>
                </li>
            @endforeach
            </ul>
        </div>
      </div>

      {{-- Card: Kirim Balasan & Hapus --}}
      <div class="card shadow-sm">
        <div class="card-header bg-white">
          <h5 class="mb-0">Kirim Balasan</h5>
        </div>
        <div class="card-body">
          @foreach($key as $fasil)
            <form action="{{ route('buku.kirim') }}" method="POST" class="mb-3">
              @csrf
              <input type="hidden" name="id" value="{{ $fasil->id }}">

              <div class="form-floating mb-3">
                <textarea
                  class="form-control"
                  id="content-{{ $fasil->id }}"
                  name="content"
                  placeholder="Tulis balasan..."
                  style="height: 100px"
                  required>{{ old('content') }}</textarea>
                <label for="content-{{ $fasil->id }}">Isi Konten</label>
              </div>

              <button type="submit" class="btn btn-primary w-100 mb-2">
                <i class="bi bi-send-fill me-1"></i> Kirim Balasan
              </button>
            </form>

            <form
              action="{{ url('/buku/delete/' . $fasil->id) }}"
              method="POST"
              onsubmit="return confirm('Yakin ingin menghapus laporan ini?');"
            >
              @csrf
              @method('DELETE')
              <button type="submit" class="btn btn-outline-danger w-100">
                <i class="bi bi-trash-fill me-1"></i> Hapus Laporan
              </button>
            </form>
          @endforeach
        </div>
      </div>

    </div>

    {{-- KANAN: Foto --}}
    <div class="col-lg-6">
      @foreach($key as $fasil)
        <div class="card shadow-sm mb-4">
          <img
            src="{{ asset($fasil->foto) }}"
            class="card-img-top"
            alt="Foto Fasilitas"
            style="object-fit: cover; height: auto;"
          >
        </div>
      @endforeach
    </div>

  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>