<?php
use Symfony\Component\Yaml\Yaml;

try {
    $yamlFile = realpath(__DIR__ . '/../yml/competences.yml');
    if (!$yamlFile) {
        throw new Exception('Fichier YAML introuvable.');
    }

    $data = Yaml::parseFile($yamlFile);

    function afficherSection($titre, $competences) {
        echo "<section id='$titre'>";
        echo "<h2>" . htmlspecialchars($titre) . "</h2>";
        foreach ($competences as $competence) {
            echo '<div>';
            echo '<h3>' . htmlspecialchars($competence['nom'] ?? $competence['domaine'] ?? 'Non spécifié') . '</h3>';
            echo '<p>' . nl2br(htmlspecialchars($competence['description'] ?? 'Pas de description')) . '</p>';
            echo '</div>';
        }
        echo '</section>';
    }

    afficherSection("Languages de Programmation", $data['languages-prog']);
    afficherSection("Langues", $data['langues']);
    afficherSection("Compétences Réseau", $data['competences-reseau']);
    afficherSection("Autres Compétences", $data['autres-competences']);
    
} catch (Exception $e) {
    echo 'Erreur lors du chargement des compétences : ' . htmlspecialchars($e->getMessage());
}
?>
