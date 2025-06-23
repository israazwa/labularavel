<div>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
</div>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="bantu mt-5"></div>
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="/admin/fasil">Fasilitas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/admin/buku">Buku</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="/admin/saran">KritikSaran</a>
  </li>
  <li class="nav-item">
    <a class="nav-link disabled" aria-disabled="true">Disabled</a>
  </li>
</ul>

  <div class="container mt-5">
    <h2 class="mb-4">Daftar Pesan</h2>
    <table class="table table-striped">
      <thead class="table-dark">
        <tr>
          <th>Email</th>
          <th>Isi</th>
          <th>Tanggal Dibuat</th>
        </tr>
      </thead>
      <tbody>
        <!-- Contoh data statis, ganti dengan loop dari backend -->
        <?php foreach($n1 as $key): ?>
        <tr>
          <td><?= $key['email']; ?></td>
          <td><?= $key['content']; ?></td>
          <td><?= $key['created_at']; ?></td>
        </tr>
       <?php endforeach ?>
      </tbody>
    </table>
  </div>
</body>
</html>