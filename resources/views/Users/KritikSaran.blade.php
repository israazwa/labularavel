
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
<div class="bantu mt-5 mb-2"
><ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link "  href="/laporan/buku">Buku</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/laporan/fasilitas" aria-current="page">Fasilitas</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="/saran">Kritik Saran</a>
  </li>
</ul>
</div>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Kritik dan Saran</h1>
            <p class="text-center">Silakan berikan kritik dan saran Anda untuk meningkatkan layanan kami.</p>
        </div>
    </div>
</div>

<div class="container">
    <form action="/saran/kirim" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Email address</label>
  <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Kritik dan/atau Saran</label>
  <textarea class="form-control" name="saran" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
<div class="button">
    <button type="submit" class="tombolKirim">-- Kirim --</button>
</div>
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
    </form>
</div>


