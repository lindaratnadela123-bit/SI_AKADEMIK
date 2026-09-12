<!DOCTYPE html>
<html>
<head>
    <title>Login - SI Akademik</title>
    <link rel="stylesheet" href="/SI_AKADEMIK/public/assets/css/style.css">
</head>
<body>
    <div class="login-wrap">
        <div class="login-card">
            <h1>SI Akademik</h1>
            <p class="subtitle">Politeknik Negeri Jember</p>

            <?php if (!empty($error)): ?>
                <div class="alert-error"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>

            <form method="POST" action="/SI_AKADEMIK/public/login/process">
                <div class="field">
                    <label>Username</label>
                    <input type="text" name="username">
                </div>
                <div class="field">
                    <label>Password</label>
                    <input type="password" name="password">
                </div>
                <button type="submit" class="btn">Masuk</button>
            </form>
        </div>
    </div>
</body>
</html>