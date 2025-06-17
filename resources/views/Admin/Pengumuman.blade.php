<div>
    <!-- It is never too late to be what you might have been. - George Eliot -->
</div>
<div class="container col-10">
    <form action="{{ route('pengumuman.store') }}" method="POST" id="formPengumuman">
    @csrf

    <div class="mb-2">
        <label for="content" class="form-label">Isi Pengumuman</label>
        <textarea class="form-control" id="content" name="content" rows="3" required>{{ old('content') }}</textarea>
    </div>

    <div class="mb-1">
        <label for="pj" class="form-label">Penanggung Jawab</label>
        <input type="text" class="form-control" id="pj" name="pj" value="{{ old('pj') }}" required>
    </div>

    <div class="mb1">
        <label for="link" class="form-label">Tautan </label>
        <input type="url" class="form-control" id="link" name="link" value="{{ old('link') }}">
    </div>

    <div class="mb-1">
        <label for="cp" class="form-label">Kontak Person</label>
        <input type="text" class="form-control" id="cp" name="cp" value="{{ old('cp') }}" required>
    </div>

<button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#konfirmasiModal">
    Submit
</button>
<!-- Modal Konfirmasi -->
<div class="modal fade" id="konfirmasiModal" tabindex="-1" aria-labelledby="konfirmasiModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="konfirmasiModalLabel">Konfirmasi Pengiriman</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Tutup"></button>
      </div>
      <div class="modal-body">
        Apakah Anda yakin ingin mengirim data ini?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-danger" form="formPengumuman">Yakin & Kirim</button>
      </div>
    </div>
  </div>
</div>
    </form>
</div>

<div class="container">
    <div class="table table-responsive">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Isi Pengumuman</th>
                    <th scope="col">Penanggung Jawab</th>
                    <th scope="col">Tautan</th>
                    <th scope="col">Kontak Person</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pengumuman as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->content }}</td>
                    <td>{{ $item->pj }}</td>
                    <td><a href="{{ $item->link }}" target="_blank">{{ $item->link }}</a></td>
                    <td>{{ $item->cp }}</td>
                    <td>
                        <form action="{{ route('pengumuman.delete', $item->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
