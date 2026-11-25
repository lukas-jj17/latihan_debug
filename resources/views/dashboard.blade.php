
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Sistem Absensi</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: #f4f6f9;
            font-family: Arial, sans-serif;
        }

        .sidebar {
            width: 250px;
            min-height: 100vh;
            background: #212529;
            position: fixed;
            left: 0;
            top: 0;
            padding: 25px 15px;
        }

        .sidebar h4 {
            color: white;
            text-align: center;
            margin-bottom: 35px;
        }

        .sidebar a {
            display: block;
            color: #adb5bd;
            text-decoration: none;
            padding: 13px 15px;
            border-radius: 8px;
            margin-bottom: 8px;
        }

        .sidebar a:hover,
        .sidebar a.active {
            background: #667eea;
            color: white;
        }

        .main-content {
            margin-left: 250px;
            padding: 30px;
        }

        .navbar-custom {
            background: white;
            padding: 18px 25px;
            border-radius: 12px;
            margin-bottom: 30px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .dashboard-card {
            background: white;
            border: none;
            border-radius: 12px;
            padding: 25px;
            height: 100%;
            transition: 0.2s;
        }

        .dashboard-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
        }

        .icon-box {
            width: 55px;
            height: 55px;
            border-radius: 12px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 25px;
            margin-bottom: 20px;
        }

        .logout-btn {
            border: none;
            background: transparent;
            color: #adb5bd;
            width: 100%;
            text-align: left;
            padding: 13px 15px;
        }

        .logout-btn:hover {
            color: white;
            background: #dc3545;
            border-radius: 8px;
        }

        @media(max-width: 768px) {
            .sidebar {
                width: 100%;
                min-height: auto;
                position: relative;
            }

            .main-content {
                margin-left: 0;
                padding: 15px;
            }
        }
    </style>
</head>
<body>

    <!-- SIDEBAR -->
    <div class="sidebar">

        <h4>
            <i class="bi bi-mortarboard-fill"></i>
            SISTEM ABSENSI
        </h4>

        <a href="{{ route('dashboard') }}" class="active">
            <i class="bi bi-grid-fill me-2"></i>
            Dashboard
        </a>

        <a href="{{ route('matkul.index') }}">
            <i class="bi bi-book-fill me-2"></i>
            Mata Kuliah
        </a>

        <a href="{{ route('mahasiswa.index') }}">
            <i class="bi bi-people-fill me-2"></i>
            Mahasiswa
        </a>

        <a href="{{ route('absensi.index') }}">
            <i class="bi bi-calendar-check-fill me-2"></i>
            Absensi
        </a>

        <hr class="text-secondary">

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="logout-btn">
                <i class="bi bi-box-arrow-right me-2"></i>
                Logout
            </button>
        </form>

    </div>


    <!-- MAIN CONTENT -->
    <div class="main-content">

        <!-- NAVBAR -->
        <div class="navbar-custom d-flex justify-content-between align-items-center">

            <div>
                <h5 class="fw-bold mb-1">Dashboard</h5>
                <small class="text-muted">Sistem Informasi Absensi Mahasiswa</small>
            </div>

            <div class="text-end">
                <span class="fw-semibold">
                    <i class="bi bi-person-circle me-1"></i>
                    {{ Auth::user()->name }}
                </span>
                <br>
                <small class="text-muted">Administrator</small>
            </div>

        </div>


        <!-- WELCOME -->
        <div class="mb-4">
            <h3 class="fw-bold">
                Selamat Datang, {{ Auth::user()->name }}!
            </h3>

            <p class="text-muted">
                Silakan pilih menu untuk mengelola data sistem absensi.
            </p>
        </div>


        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif


        <!-- MENU CARDS -->
        <div class="row g-4">

            <!-- MATA KULIAH -->
            <div class="col-md-4">
                <div class="dashboard-card shadow-sm">

                    <div class="icon-box bg-primary-subtle text-primary">
                        <i class="bi bi-book-fill"></i>
                    </div>

                    <h5 class="fw-bold">Mata Kuliah</h5>

                    <p class="text-muted">
                        Mengelola data mata kuliah yang tersedia.
                    </p>

                    <a href="{{ route('matkul.index') }}"
                       class="btn btn-primary w-100">
                        Kelola Mata Kuliah
                    </a>

                </div>
            </div>


            <!-- MAHASISWA -->
            <div class="col-md-4">
                <div class="dashboard-card shadow-sm">

                    <div class="icon-box bg-success-subtle text-success">
                        <i class="bi bi-people-fill"></i>
                    </div>

                    <h5 class="fw-bold">Mahasiswa</h5>

                    <p class="text-muted">
                        Mengelola data mahasiswa yang terdaftar.
                    </p>

                    <a href="{{ route('mahasiswa.index') }}"
                       class="btn btn-success w-100">
                        Kelola Mahasiswa
                    </a>

                </div>
            </div>


            <!-- ABSENSI -->
            <div class="col-md-4">
                <div class="dashboard-card shadow-sm">

                    <div class="icon-box bg-warning-subtle text-warning">
                        <i class="bi bi-calendar-check-fill"></i>
                    </div>

                    <h5 class="fw-bold">Absensi</h5>

                    <p class="text-muted">
                        Melihat dan mengelola data absensi mahasiswa.
                    </p>

                    <a href="{{ route('absensi.index') }}"
                       class="btn btn-warning w-100">
                        Kelola Absensi
                    </a>

                </div>
            </div>

        </div>


        <!-- INFORMATION -->
        <div class="card border-0 shadow-sm mt-4 p-4">

            <h5 class="fw-bold mb-3">
                <i class="bi bi-info-circle me-2 text-primary"></i>
                Informasi Sistem
            </h5>

            <p class="text-muted mb-0">
                Sistem Informasi Absensi Mahasiswa digunakan untuk
                membantu pengelolaan data mata kuliah, mahasiswa,
                dan kehadiran mahasiswa secara terstruktur.
            </p>

        </div>

        <div class="text-center text-muted mt-5">
            <small>&copy; 2026 Sistem Absensi Mahasiswa</small>
        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
