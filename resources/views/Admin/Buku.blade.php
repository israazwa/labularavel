
    <!-- An unexamined life is not worth living. - Socrates -->
<html>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
<div class="bantu mt-5"></div>
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link "  href="/admin/fasil">Fasilitas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="/admin/buku" aria-current="page">Buku</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Link</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
  </li>
</ul>

<div class="container">
  <div class="table-responsive">
<table class="table table-striped">
  <thead>
    <tr>
        <td>No.</td>
        <td>Email</td>
        <td>Nama</td>
        <td>Masalah</td>
        <td>More</td>
    </tr>
  </thead>
  <tbody><?php $no = ($data->currentPage() - 1) * $data->perPage() + 1; ?>
    <?php foreach ($konten as $n1): ?>
    <tr>
        <td><?= $no; ?></td>
        <td><?= $n1['email']; ?></td>
        <td><?= $n1['nama']; ?></td>
        <td><?= $n1['jenis']; ?></td>
        <td>
            <a href="{{ route('detailbuku', ['id' => $n1['id']]) }}">Lihat Detail</a>
        </td>
    </tr>
    <?php $no++; ?>
    <?php endforeach; ?>
  </tbody>
</table>
  </div>
</div>

<div class="container mx-3 mt-3">
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <!-- Tombol Previous -->
    <li class="page-item {{ $data->onFirstPage() ? 'disabled' : '' }}">
      <a class="page-link" href="{{ $data->previousPageUrl() }}" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>

    <!-- Nomor Halaman -->
    @foreach ($data->links()->elements[0] as $page => $url)
      <li class="page-item {{ $data->currentPage() == $page ? 'active' : '' }}">
        <a class="page-link" href="{{ $url }}">{{ $page }}</a>
      </li>
    @endforeach

    <!-- Tombol Next -->
    <li class="page-item {{ $data->hasMorePages() ? '' : 'disabled' }}">
      <a class="page-link" href="{{ $data->nextPageUrl() }}" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
</div>
</html>