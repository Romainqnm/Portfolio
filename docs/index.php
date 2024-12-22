<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Romain</title>
    <link rel="stylesheet" href="assets/style/style.css">
    <script src="assets/js/script.js" defer></script>
</head>
<body>
    <header class="main-header">
        <nav class="navbar">
            <ul class="nav-links">
                <li><a href="#competences">Compétences</a></li>
                <li><a href="#realisations">Réalisations</a></li>
                <li><a href="#formation">Formation</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="hero" class="hero-section">
        <div class="hero-content">
            <h1>Bienvenue sur mon portfolio</h1>
            <p>Étudiant en BTS SIO, passionné par le développement (SLAM) et les réseaux (SISR).</p>
        </div>
        <div class="hero-image">
            <img src="assets/pictures/romain.jpg" alt="Photo de Romain">
        </div>
    </section>

    <section id="competences" class="section">
        <h2>Compétences</h2>
        <p>Découvrez mes diverses compétences.</p>
        <?php include 'pages/php/competences.php'; ?>
    </section>

    <section id="realisations" class="section">
        <h2>Réalisations</h2>
        <p>Explorez mes projets et réalisations.</p>
        <?php include 'pages/php/realisations.php'; ?>
    </section>

    <section id="formation" class="section">
        <h2>Formation</h2>
        <p>Mon parcours académique et professionnel.</p>
        <?php include 'pages/php/formation.php'; ?>
    </section>

    <section id="contact" class="section">
        <h2>Contact</h2>
        <p>Entrons en contact pour collaborer ou en savoir plus.</p>
        <?php include 'pages/php/contact.php'; ?>
    </section>

    <footer class="footer">
        <p>© 2024 Romain Quoniam - Tous droits réservés</p>
    </footer>
</body>
</html>
