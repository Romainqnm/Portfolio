<?php
use Symfony\Component\Yaml\Yaml;

try {
    $yamlFile = realpath(__DIR__ . '/../yml/competences.yml');
    if (!$yamlFile) {
        throw new Exception('Fichier YAML introuvable.');
    }

    $data = Yaml::parseFile($yamlFile);

    function afficherSection($titre, $competences) {
        echo "<section id='$titre' class='section'>";
        echo "<h2>" . htmlspecialchars($titre) . "</h2>";
        foreach ($competences as $competence) {
            $nom = htmlspecialchars($competence['nom'] ?? $competence['domaine'] ?? 'Non spécifié');
            $description = nl2br(htmlspecialchars($competence['description'] ?? 'Pas de description'));
            $niveau = intval($competence['niveau'] ?? 0);

            echo "<div class='competence'>";
            echo "<h3>$nom</h3>";
            echo "<p>$description</p>";
            echo "<div class='progress-bar-container'>";
            echo "<div class='progress-bar' style='width: {$niveau}%;'></div>";
            echo "</div>";
            echo "<p class='niveau'>Niveau : $niveau%</p>";
            echo "</div>";
        }
        echo "</section>";
    }

    // Afficher les différentes sections
    afficherSection("Languages de Programmation", $data['languages-prog']);
    afficherSection("Langues", $data['langues']);
    afficherSection("Compétences Réseau", $data['competences-reseau']);
    afficherSection("Autres Compétences", $data['autres-competences']);
} catch (Exception $e) {
    echo 'Erreur lors du chargement des compétences : ' . htmlspecialchars($e->getMessage());
}
?>
