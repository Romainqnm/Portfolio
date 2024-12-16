<?php
require_once  'vendor/autoload.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Romain Quoniam - Accueil Portfolio</title>
    <!-- Intégration de Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style/style.css">
</head>
<body>

<!-- En-tête avec menu fixe -->
<header>
    <h1>Bienvenue sur mon Portfolio !</h1>
    <nav>
        <ul>
            <li><a href="#accueil">Accueil</a></li>
            <li><a href="#competences">Compétences</a></li>
            <li><a href="#realisations">Réalisations</a></li>
            <li><a href="#formation">Formation</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
</header>

<section id="accueil" class="hero">
    <div class="hero-content">
        <div class="hero-text">
            <h2>Etudiant en BTS SIO</h2>
            <p>Passionné par les technologies de l'information, j'aime créer des solutions numériques modernes.</p>
            <a href="#competences" class="cta-btn">Découvrir mes compétences</a>
        </div>

        <!-- Image de présentation -->
        <div class="hero-image">
            <img src="assets/pictures/romain.jpg" alt="Photo de Romain">
        </div>
    </div>
</section>



<!-- Sections dynamiques -->
<section id="competences" class="section">
    <h2>Compétences</h2>
    <?php include 'pages/php/competences.php'; ?>
</section>

<section id="realisations" class="section">
    <h2>Réalisations</h2>
    <?php include 'pages/php/realisations.php'; ?>
</section>

<section id="formation" class="section">
    <h2>Formation</h2>
    <?php include 'pages/php/formation.php'; ?>
</section>

<section id="contact" class="section">
    <h2>Contact</h2>
    <?php include 'pages/php/contact.php'; ?>
</section>

<!-- Pied de page -->
<footer>
    <p>&copy; Portfolio de Romain Quoniam - 2024 | Tous droits réservés.</p>
</footer>

</body>
</html>
