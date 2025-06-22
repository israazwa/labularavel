<div>
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
</div>
<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow-sm">
          <div class="card-body">
            <h2 class="card-title mb-4 text-center">Daftar Akun</h2>

            <form action="{{ route('regisUp') }}" method="POST">
                @csrf
              <div class="form-floating mb-3">
                <input type="text" class="form-control" id="name" name="name" placeholder="Nama Lengkap" required>
                <label for="name">Nama Lengkap</label>
              </div>

              <div class="form-floating mb-3">
                <input type="email" class="form-control" id="email" name="email" placeholder="email@example.com" required>
                <label for="email">Email</label>
              </div>

              <div class="form-floating mb-3 position-relative">
                <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                <label for="password">Password</label>
                <a href="#" class="position-absolute top-50 end-0 translate-middle-y pe-3 text-decoration-none" onclick="togglePassword()" tabindex="-1">
                  <i id="eyeIcon" class="bi bi-eye-slash"></i>
                </a>
              </div>
               <script>
                function togglePassword() {
                const pwd = document.getElementById('password');
                const icon = document.getElementById('eyeIcon');
                if (pwd.type === 'password') {
                    pwd.type = 'text';
                    icon.classList.replace('bi-eye-slash', 'bi-eye');
                } else {
                    pwd.type = 'password';
                    icon.classList.replace('bi-eye', 'bi-eye-slash');
                }
                }
            </script>
              <button type="submit" class="btn btn-primary w-100">Daftar Sekarang</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap 5 JS & dependencies (Popper) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Optional: Toggle visibility password -->
 
  <!-- Bootstrap Icons (untuk icon mata) -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</body>
</html>