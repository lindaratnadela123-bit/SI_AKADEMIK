<!DOCTYPE html>
<html>
<head>
    <title>Detail Mahasiswa - SI Akademik</title>
    <link rel="stylesheet" href="/SI_AKADEMIK/public/assets/css/style.css">
</head>
<body>
    <?php require_once __DIR__ . '/../partials/nav.php'; ?><nav class="navbar">
    <div class="navbar-inner">
        <a href="/SI_AKADEMIK/public/dashboard" class="brand">SI Akademik</a>
        <div class="nav-links">
            <a href="/SI_AKADEMIK/public/dashboard">Dashboard</a>
            <a href="/SI_AKADEMIK/public/mahasiswa">Mahasiswa</a>
            <a href="/SI_AKADEMIK/public/dosen">Dosen</a>
            <a href="/SI_AKADEMIK/public/logout" class="logout-link">Logout</a>
        </div>
    </div>
</nav>

    <div class="page">
        <div class="card">
            <h1>Detail Mahasiswa</h1>

            <?php if (isset($mahasiswa) && $mahasiswa): ?>
                <p><strong>NIM:</strong> <?= htmlspecialchars($mahasiswa['nim']) ?></p>
                <p><strong>Nama:</strong> <?= htmlspecialchars($mahasiswa['nama']) ?></p>
                <p><strong>Prodi:</strong> <?= htmlspecialchars($mahasiswa['prodi']) ?></p>
            <?php else: ?>
                <p>Data mahasiswa tidak ditemukan.</p>
            <?php endif; ?>

            <p style="margin-top:1.5rem;"><a href="/SI_AKADEMIK/public/mahasiswa">← Kembali ke daftar</a></p>
        </div>
    </div>
</body>
</html>