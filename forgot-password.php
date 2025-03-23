<?php include __DIR__ . '/components/header.php'; ?>
<?php include __DIR__ . '/components/footer.php'; ?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Obnova hesla</title>
    <link rel="stylesheet" href="s/style.css">
    <link rel="stylesheet" href="s/auth.css">
</head>
<body>
    <?php renderHeader('forgot-password'); ?>
    
    <main class="auth-container">
        <form class="auth-form">
            <h2>Obnova hesla</h2>
            <label for="email">E-mail</label>
            <input type="email" id="email" placeholder="Zadejte váš e-mail" required>

            <button type="submit" class="btn">Obnovit heslo</button>
            <p><a href="login.php">Zpět na přihlášení</a></p>
        </form>
    </main>

    <?php renderFooter(); ?>
</body>
</html>
