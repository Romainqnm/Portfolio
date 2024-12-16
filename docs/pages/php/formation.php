<?php
use Symfony\Component\Yaml\Yaml;

try {
    $data = Yaml::parseFile(__DIR__ . '../yml/formation.yml');
    echo '<section id="formation">';
    echo '<h2>Formation</h2>';
    foreach ($data['Formation'] as $formation) {
        echo '<div>';
        echo '<h3>' . htmlspecialchars($formation['établissement']) . ' (' . htmlspecialchars($formation['période-apprentissage']) . ')</h3>';
        echo '<p>' . htmlspecialchars($formation['description']) . '</p>';
        echo '</div>';
    }
    echo '</section>';
} catch (Exception $e) {
    echo 'Erreur lors du chargement de la formation : ', htmlspecialchars($e->getMessage());
}
?>
