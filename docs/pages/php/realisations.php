<?php
use Symfony\Component\Yaml\Yaml;

try {
    $data = Yaml::parseFile(__DIR__ . '../yml/realisations.yml');
    echo '<section id="realisations">';
    echo '<h2>Réalisations</h2>';
    foreach ($data['realisations'] as $realisation) {
        echo '<div>';
        echo '<h3>' . htmlspecialchars($realisation['titre']) . '</h3>';
        echo '<p>' . htmlspecialchars($realisation['description']) . '</p>';
        echo '<a href="' . htmlspecialchars($realisation['lien']) . '">Voir le projet</a>';
        echo '</div>';
    }
    echo '</section>';
} catch (Exception $e) {
    echo 'Erreur lors du chargement des réalisations : ', htmlspecialchars($e->getMessage());
}
?>
