<?php require_once __DIR__ . '/vendor/autoload.php'; ?>

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
<header class="navbar">
    <div class="header-content">
        <!-- Logo et texte à gauche -->
        <div class="logo-container">
            <img src="assets/pictures/logo.png" alt="Logo" class="logo">
            <span class="portfolio-title">Romain Quoniam - Portfolio</span>
        </div>

        <!-- Réseaux sociaux à droite -->
        <div class="social-links">
            <a href="https://www.linkedin.com/in/romain-quoniam-8005112b6/" target="_blank">LinkedIn</a>
            <a href="https://github.com/Romainqnm" target="_blank">GitHub</a>
            <a href="https://www.instagram.com/romain.qnm/" target="_blank">Instagram</a>
            <a href="https://fr.duolingo.com/profile/Romain_qnm" target="_blank">Duolingo</a>
        </div>
    </div>

    <ul class="nav-links">
        <li><a href="#hero">Accueil</a></li>
        <li><a href="#competences">Compétences</a></li>
        <li><a href="#realisations">Réalisations</a></li>
        <li><a href="#formation">Formation</a></li>
        <li><a href="#contact">Contact</a></li>
    </ul>
</header>

    <section id="hero" class="hero-section">
    <div class="hero-content">
        <h1>Bienvenue sur mon portfolio !</h1>
        <p> Vous y découvrirez plein de choses sur moi, notamment mes diverses compétences, réalisations, formations et projets. </p>
        <p> Je vous invite également à vous rendre dans la section de contact afin d'échanger. Cela serait avec plaisir. </p>
    </div>
    <div class="hero-image">
        <img src="assets/pictures/romain.jpg" alt="Photo de Romain">
    </div>
</section>

<section id="about" class="about-section">
    <div class="about-content">
        <h2>Introduction à mon portfolio</h2>
        <p>Bonjour ! Je m'appelle <strong>Romain</strong>, et je suis actuellement étudiant en <strong>BTS SIO</strong>, spécialité <strong>SISR</strong> (Systèmes et Réseaux), passionné par l'informatique et tout ce qui touche au monde du développement et des technologies. À travers ce portfolio, je souhaite vous présenter un aperçu de mon parcours, de mes projets et de mes compétences acquises au fil du temps, tant dans le cadre de mes études que dans mes projets personnels et professionnels.</p>

        <h3>Qui suis-je ?</h3>
        <p>Je suis une personne curieuse, déterminée et toujours en quête d'amélioration. Mon parcours scolaire et mes différents projets m'ont permis de développer un large éventail de compétences, allant de la programmation web à l'administration des systèmes et réseaux. En plus de ma formation technique, je suis passionné par l'assemblage d'ordinateurs, le développement de logiciels, ainsi que le design et l’optimisation de sites web.</p>

        <h3>Mon approche</h3>
        <p>Je m'efforce toujours de travailler de manière méthodique, en privilégiant une approche claire et une bonne organisation dans mes projets. Que ce soit pour la création d'un site web ou la gestion d'un réseau, je veille à respecter les meilleures pratiques et à m'assurer que chaque tâche soit réalisée de manière efficace, tout en cherchant constamment à innover.</p>

        <h3>Objectifs et aspirations</h3>
        <p>Après mon BTS, je souhaite poursuivre mes études en <strong>cybersécurité</strong> en alternance. Cette formation me permettra de me spécialiser davantage dans ce domaine crucial et en pleine expansion. Mon objectif est d’acquérir une expertise solide en sécurité des systèmes et des réseaux, tout en ayant l'opportunité de mettre en pratique mes compétences dans un environnement professionnel.</p>
        <p>Je suis également intéressé par l'idée d'aller étudier et travailler dans des <strong>pays anglophones</strong>, comme <strong>l'Angleterre</strong> ou le <strong>Canada</strong>. Cela me permettrait d'améliorer mes compétences en langue anglaise tout en découvrant de nouvelles approches et technologies en cybersécurité dans un contexte international.</p>
    </div>
</section>

    <section id="competences" class="section">
        <h2>Compétences</h2>
        <br>
        <br>
        <p>Découvrez mes diverses compétences.</p>
        <br>
        <?php include 'pages/php/competences.php'; ?>
    </section>

    <section id="realisations" class="section">
        <h2>Réalisations</h2>
        <br>
        <br>
        <p>Explorez mes projets et réalisations.</p>
        <br>
        <?php include 'pages/php/realisations.php'; ?>
    </section>

    <section id="formation" class="section">
        <h2>Formation</h2>
        <br>
        <br>
        <p>Mon parcours académique et professionnel.</p>
        <br>
        <?php include 'pages/php/formation.php'; ?>
        <br>
        <br>
        <a href="assets/others/CV SIO.pdf" target="_blank" class="cv-button">Voir mon CV</a>

    </section>

    <section id="contact" class="mail">
    <h2>Contact</h2>

    <!-- Formulaire -->
    <form action="#contact" method="POST">
        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" placeholder="Votre nom" required>
        </div>
        <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email" placeholder="Votre adresse email" required>
        </div>
        <div class="form-group">
            <label for="objet">Objet du message :</label>
            <input type="text" id="objet" name="objet" placeholder="Sujet du message" required>
        </div>
        <div class="form-group">
            <label for="message">Message :</label>
            <textarea id="message" name="message" rows="5" placeholder="Votre message" required></textarea>
            <br>
            <p class="rgpd-message">
                Conformément au Règlement Général sur la Protection des Données (RGPD), les informations 
                renseignées dans ce formulaire ne seront utilisées qu'à des fins de contact. Elles ne seront ni stockées, 
                ni partagées, ni revendues. Une fois le message envoyé, aucune donnée ne sera conservée.
            </p>
            <br>
            <form action="votre_script_php.php" method="POST">

    <!-- Captacha -->
    
    <div class="g-recaptcha" data-sitekey="6LcltqQqAAAAAJCLjg2KmCrRQ60kvhWZEf-kc-3a"></div>


</form>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

        </div>
        <button type="submit">Envoyer</button>

        <br> 
        <br>
        <br>
    </form>



    <!-- Affichage des messages -->
<?php if (!empty($erreurs)): ?>
<div class="erreurs">
    <ul>
        <?php foreach ($erreurs as $erreur): ?>
            <li><?= htmlspecialchars($erreur); ?></li>
        <?php endforeach; ?>
    </ul>
</div>
<?php elseif (!empty($confirmation)): ?>
<p class="confirmation"><?= htmlspecialchars($confirmation); ?></p>
<?php endif; ?>



<footer class="footer">
    <p>© 2024 Romain Quoniam - Tous droits réservés</p>
    <br>
    <p>
        <a href="http://jigsaw.w3.org/css-validator/check/referer">
        <img style="border:0;width:88px;height:31px"
        src="http://jigsaw.w3.org/css-validator/images/vcss-blue"
        alt="CSS Valide !" />
    </a>
</p>
</footer>

</body>
</html>
