<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa - SI Akademik</title>
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
            <h1>Data Mahasiswa</h1>
            <p class="subtitle">Politeknik Negeri Jember</p>

            <?php if (isset($mahasiswa) && is_array($mahasiswa)): ?>
                <table>
                    <thead>
                        <tr>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Prodi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($mahasiswa as $mhs): ?>
                            <tr>
                                <td><?= htmlspecialchars($mhs['nim']) ?></td>
                                <td><?= htmlspecialchars($mhs['nama']) ?></td>
                                <td><?= htmlspecialchars($mhs['prodi']) ?></td>
                                <td>
                                    <a href="/SI_AKADEMIK/public/mahasiswa/<?= urlencode($mhs['nim']) ?>">Detail</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p>Data mahasiswa belum tersedia.</p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>