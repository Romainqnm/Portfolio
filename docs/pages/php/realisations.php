<?php 
use Symfony\Component\Yaml\Yaml;

try {
    $data = Yaml::parseFile(__DIR__ . '/../yml/realisations.yml');

    // Parcourir les réalisations scolaires
    if (isset($data['realisation-scolaire']) && is_array($data['realisation-scolaire'])) {
        echo '<h3>Réalisations Scolaires</h3>';
        foreach ($data['realisation-scolaire'] as $realisation) {
            echo '<div>';
            echo '<h4>' . htmlspecialchars($realisation['type-realisation'] ?? 'Type inconnu') . '</h4>';
            echo '<p><strong>Matière :</strong> ' . htmlspecialchars($realisation['matière'] ?? 'Non spécifiée') . '</p>';
            echo '<p>' . htmlspecialchars($realisation['nom-realisation'] ?? 'Nom non spécifié') . '</p>';
            echo '<p>' . htmlspecialchars($realisation['description'] ?? 'Pas de description') . '</p>';
            echo '</div>';
        }
    }

    // Parcourir les réalisations loisirs
    if (isset($data['realisation-loisir']) && is_array($data['realisation-loisir'])) {
        echo '<h3>Réalisations Loisirs</h3>';
        foreach ($data['realisation-loisir'] as $realisation) {
            echo '<div>';
            echo '<h4>' . htmlspecialchars($realisation['type-realisation'] ?? 'Type inconnu') . '</h4>';
            echo '<p><strong>Projet :</strong> ' . htmlspecialchars($realisation['projet'] ?? 'Non spécifié') . '</p>';
            echo '<p>' . htmlspecialchars($realisation['description'] ?? 'Pas de description') . '</p>';
            echo '</div>';
        }
    }

    // Parcourir les certifications
    if (isset($data['certifications']) && is_array($data['certifications'])) {
        echo '<h3>Certifications</h3>';
        foreach ($data['certifications'] as $certif) {
            echo '<div>';
            echo '<h4>' . htmlspecialchars($certif['nom-certif'] ?? 'Nom non spécifié') . '</h4>';
            echo '<p>' . htmlspecialchars($certif['description'] ?? 'Pas de description') . '</p>';
            echo '</div>';
        }
    }

    echo '</section>';
} catch (Exception $e) {
    echo 'Erreur lors du chargement des réalisations : ', htmlspecialchars($e->getMessage());
}
?>
