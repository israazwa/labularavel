
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
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
    <button type="submit" class="btn btn-warning">-- Kirim --</button>
</div>


    </form>
</div>


