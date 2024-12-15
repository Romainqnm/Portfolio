<?php
require_once __DIR__ . '../../yml/vendor/autoload.php';
use Symfony\Component\Yaml\Yaml;

try {
    $data = Yaml::parseFile(__DIR__ . '/../yml/competences.yml');
    echo '<section id="competences">';
    echo '<h2>Compétences</h2>';
    foreach ($data['competences'] as $competence) {
        echo '<div>';
        echo '<h3>' . htmlspecialchars($competence['titre']) . '</h3>';
        echo '<p>' . htmlspecialchars($competence['description']) . '</p>';
        echo '</div>';
    }
    echo '</section>';
} catch (Exception $e) {
    echo 'Erreur lors du chargement des compétences : ', htmlspecialchars($e->getMessage());
}
?>
