<?php include __DIR__ . '/components/header.php'; ?>
<?php include __DIR__ . '/components/footer.php'; ?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Přihlášení</title>
    <link rel="stylesheet" href="s/style.css">
    <link rel="stylesheet" href="s/auth.css">
</head>
<body>
    <?php renderHeader('login'); ?>
    
    <main class="auth-container">
        <form class="auth-form">
            <h2>Přihlášení</h2>
            <label for="email">E-mail</label>
            <input type="email" id="email" placeholder="Zadejte e-mail" required>

            <label for="password">Heslo</label>
            <input type="password" id="password" placeholder="Zadejte heslo" required>

            <button type="submit" class="btn">Přihlásit se</button>
            <p><a href="forgot-password.php">Zapomněli jste heslo?</a></p>
        </form>
    </main>

    <?php renderFooter(); ?>
</body>
</html>
