
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Sistem Absensi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #667eea, #764ba2);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-card {
            width: 100%;
            max-width: 420px;
            border: none;
            border-radius: 15px;
        }

        .btn-login {
            background: #667eea;
            color: white;
        }

        .btn-login:hover {
            background: #5365ce;
            color: white;
        }
    </style>
</head>
<body>

<div class="card login-card shadow-lg p-4">

    <div class="text-center mb-4">
        <h3 class="fw-bold">Selamat Datang!</h3>
        <p class="text-muted">Silakan login ke Sistem Absensi</p>
    </div>

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            {{ $errors->first() }}
        </div>
    @endif

    <form action="{{ route('login') }}" method="POST">
        @csrf

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
                   placeholder="Masukkan password"
                   required>
        </div>

        <button type="submit" class="btn btn-login w-100 py-2">
            Login
        </button>
    </form>

    <div class="text-center mt-4">
        <p class="text-muted">
            Belum punya akun?
            <a href="{{ route('register') }}" class="text-decoration-none fw-bold">
                Daftar Sekarang
            </a>
        </p>
    </div>

</div>

</body>
</html>
