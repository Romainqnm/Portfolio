<?php
use Symfony\Component\Yaml\Yaml;

try {
    $data = Yaml::parseFile(__DIR__ . '/../yml/formation.yml');

    // Affichage des formations
    echo '<section id="formation">';
    echo '<h2>Formation</h2>';
    foreach ($data['Formation'] as $formation) {
        echo '<div>';
        echo '<h3>' . htmlspecialchars($formation['établissement']) . ' (' . htmlspecialchars($formation['période-apprentissage']) . ')</h3>';
        echo '<p><strong>Diplôme : </strong>' . htmlspecialchars($formation['diplome']) . '</p>';
        echo '<p><strong>Lieu : </strong>' . htmlspecialchars($formation['lieu']) . '</p>';
        echo '<p>' . nl2br(htmlspecialchars($formation['description'])) . '</p>';
        echo '<img src="' . htmlspecialchars($formation['logo']) . '" alt="Logo de l\'établissement" />';
        echo '</div>';
        echo '<br>';
    }
    echo '</section>';

    // Affichage des expériences professionnelles
    echo '<section id="experience-pro">';
    echo '<h2>Expériences Professionnelles</h2>';
    foreach ($data['ExperiencePro'] as $experience) {
        echo '<div>';
        echo '<h3>' . htmlspecialchars($experience['nom-fonction']) . '</h3>';
        echo '<p><strong>Type d\'expérience : </strong>' . htmlspecialchars($experience['type-d-experience']) . '</p>';
        echo '<p><strong>Entreprise : </strong>' . htmlspecialchars($experience['entreprise']) . '</p>';
        echo '<p><strong>Année : </strong>' . htmlspecialchars($experience['année']) . '</p>';
        echo '<p><strong>Durée : </strong>' . htmlspecialchars($experience['durée']) . '</p>';
        echo '<p>' . nl2br(htmlspecialchars($experience['descriptif'])) . '</p>';
        echo '</div>';
        echo '<br>';
    }
    echo '</section>';
} catch (Exception $e) {
    echo 'Erreur lors du chargement des données : ', htmlspecialchars($e->getMessage());
}
?>

