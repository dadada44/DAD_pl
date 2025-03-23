<?php include __DIR__ . '/components/header.php'; ?>
<?php include __DIR__ . '/components/footer.php'; ?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tickovací Web</title>
    <link rel="stylesheet" href="s/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="scripts/script.js" defer></script>

</head>
<body>
    <?php renderHeader('index'); ?>
    <main>

        <section class="hero">
            <div class="overlay">
                <div class="hero-text">
                    <h1>Send&Solve</h1>
                    <p>Ticketovací nástroj</p>
                </div>
                <a href="login.php" class="btn-main">
                    Přihlášení
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>
            <img src="/photo/main.jpg" alt="Main Image">
        </section>

        <section class="about" id="about">
            <div class="o-aplikaci">
                <h2>O Aplikaci</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <p>Similique incidunt sequi animi hic reprehenderit?</p>
            </div>
        </section>

        <section class="reviews">
            <h2>Recenze</h2>
            <div class="reviews-container">
                <div class="review-card">
                    <img src="photo/user.png" alt="Profilový obrázek">
                    <p>"Jednoduché použití a skvělá podpora!"</p>
                    <h4>- Petr M.</h4>
                </div>
                <div class="review-card">
                    <img src="photo/user.png" alt="Profilový obrázek">
                    <p>"Rychlé řešení problémů a skvělý tým."</p>
                    <h4>- Jana K.</h4>
                </div>
                <div class="review-card">
                    <img src="photo/user.png" alt="Profilový obrázek">
                    <p>"Moderní design a snadné používání."</p>
                    <h4>- Tomáš L.</h4>
                </div>
            </div>
        </section>

        <section class="gallery">
            <h2>Galerie</h2>
            <div class="gallery-container">
                <img src="photo/image1.jpg" alt="Obrázek 1" onclick="openLightbox(this)">
                <img src="photo/image2.jpg" alt="Obrázek 2" onclick="openLightbox(this)">
                <img src="photo/image3.jpg" alt="Obrázek 3" onclick="openLightbox(this)">
                <img src="photo/image4.jpg" alt="Obrázek 4" onclick="openLightbox(this)">
            </div>

            <!-- Lightbox (popup obrázek) -->
            <div id="lightbox" class="lightbox" onclick="closeLightbox()">
                <img id="lightbox-img">
            </div>
        </section>
    </main>
    <?php renderFooter(); ?>
</body>
</html>


