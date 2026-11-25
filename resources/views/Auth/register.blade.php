
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Sistem Absensi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #667eea, #764ba2);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .register-card {
            width: 100%;
            max-width: 450px;
            border: none;
            border-radius: 15px;
        }

        .btn-register {
            background: #667eea;
            color: white;
        }

        .btn-register:hover {
            background: #5365ce;
            color: white;
        }
    </style>
</head>
<body>

<div class="card register-card shadow-lg p-4">

    <div class="text-center mb-4">
        <h3 class="fw-bold">Buat Akun</h3>
        <p class="text-muted">Daftar untuk menggunakan Sistem Absensi</p>
    </div>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('register') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label class="form-label">Nama Lengkap</label>
            <input type="text"
                   name="name"
                   class="form-control"
                   placeholder="Masukkan nama lengkap"
                   value="{{ old('name') }}"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email"
                   name="email"
                   class="form-control"
                   placeholder="Masukkan email"
                   value="{{ old('email') }}"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="password"
                   name="password"
                   class="form-control"
                   placeholder="Minimal 8 karakter"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Konfirmasi Password</label>
            <input type="password"
                   name="password_confirmation"
                   class="form-control"
                   placeholder="Ulangi password"
                   required>
        </div>

        <button type="submit" class="btn btn-register w-100 py-2">
            Daftar Sekarang
        </button>
    </form>

    <div class="text-center mt-4">
        <p class="text-muted">
            Sudah punya akun?
            <a href="{{ route('login') }}" class="text-decoration-none fw-bold">
                Login
            </a>
        </p>
    </div>

</div>

</body>
</html>
