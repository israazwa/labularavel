<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Bootstrap CSS -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
    rel="stylesheet"
  />

  <style>
    /* SCOPED STYLES: hanya di .login-page */
    .login-page {
      background: #f7f9fc;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 1rem;
    }
    .login-card {
      display: flex;
      flex-wrap: nowrap;
      max-width: 800px;
      width: 100%;
      border: none;
      border-radius: .75rem;
      overflow: hidden;
      box-shadow: 0 .5rem 1.5rem rgba(0,0,0,.1);
    }
    .logo-section {
      Flex: 1;
      background: #e9ecef;
      display: none;             /* sembunyi di <md */
      align-items: center;
      justify-content: center;
      padding: 0;                /* hilangkan padding */
      overflow: hidden;          /* jaga img stay in box */
    }
    .logo-section img {
      width: 100%;               /* penuh lebar */
      height: 100%;              /* penuh tinggi */
      object-fit: contain;       /* proporsional tanpa crop */
      display: block;
    }
    .form-section {
      flex: 1;
      background: #fff;
      padding: 2rem;
    }
    @media (min-width: 768px) {
      .logo-section {
        display: flex;           /* tampil di ≥md */
      }
    }
    .form-floating > .form-control:focus ~ label {
      opacity: .65;
      transform: scale(.85) translateY(-.5rem);
    }
  </style>
</head>
<body>

  <section class="login-page">
    <div class="login-card">

      <!-- Logo di kiri -->
      <div class="logo-section">
        <img src="<?= url('logo.png'); ?>" alt="Logo Aplikasi" />
      </div>

      <!-- Form di kanan -->
      <div class="form-section">
        <h4 class="text-center mb-4">Masuk ke Akun</h4>
        <form method="POST" {{ route('authenticate') }}>
           @csrf
          <div class="form-floating mb-3">
            <input
              type="text"
              class="form-control @error('email') is-invalid  @enderror"
              id="identifier"
              name="email"
              placeholder="Username atau Email"
              required
            />
            <label for="identifier">Username atau Email</label>
            @error('email')
            <div class="text-danger small">
                {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-floating mb-3">
            <input
              type="password"
              class="form-control"
              id="password"
              name="password"
              placeholder="Kata Sandi"
              required
            />
            <label for="password">Password</label>
          </div>
          <div class="d-flex justify-content-between align-items-center mb-4">
        {{-- <a href="#" class="small">Lupa kata sandi?</a> --}}
          </div>
          <div class="d-grid">
            <button class="btn btn-primary btn-lg" type="submit">
              Masuk
            </button>
          </div>
        </form>
      </div>

    </div>
  </section>

  <!-- Bootstrap JS -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
  ></script>
</body>
</html>