<!DOCTYPE html>
<html>
<head>
    <title>Data Dosen - SI Akademik</title>
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
            <h1>Data Dosen</h1>
            <p class="subtitle">Politeknik Negeri Jember</p>

            <?php if (isset($dosen) && is_array($dosen)): ?>
                <table>
                    <thead>
                        <tr>
                            <th>NIDN</th>
                            <th>Nama</th>
                            <th>Prodi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($dosen as $d): ?>
                            <tr>
                                <td><?= htmlspecialchars($d['nidn']) ?></td>
                                <td><?= htmlspecialchars($d['nama']) ?></td>
                                <td><?= htmlspecialchars($d['prodi']) ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php else: ?>
                <p>Data dosen belum tersedia.</p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>