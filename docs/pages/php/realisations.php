<?php
// Charger les données YAML
if (!function_exists('yaml_parse_file')) {
    die("L'extension YAML n'est pas activée sur ce serveur.");
}

$realisations = yaml_parse_file(__DIR__ . '/../data/realisations.yml');

if ($realisations) {
    echo "<h3>{$realisations['titre']}</h3>";

    // Réalisations scolaires
    echo "<h4>Réalisations Scolaires</h4><ul>";
    foreach ($realisations['realisation-scolaire'] as $realisation) {
        echo "<li><strong>{$realisation['nom-realisation']}</strong> ({$realisation['matière']} - {$realisation['type-realisation']}): ";
        echo "{$realisation['description']}</li>";
    }
    echo "</ul>";

    // Réalisations de loisir
    echo "<h4>Réalisations de Loisir</h4><ul>";
    foreach ($realisations['realisation-loisir'] as $loisir) {
        echo "<li><strong>{$loisir['projet']}</strong> ({$loisir['type-realisation']}): ";
        echo "{$loisir['description']}</li>";
    }
    echo "</ul>";

    // Certifications
    echo "<h4>Certifications</h4><ul>";
    foreach ($realisations['certifications'] as $certification) {
        echo "<li><strong>{$certification['nom-certif']}</strong>: {$certification['description']}</li>";
    }
    echo "</ul>";
} else {
    echo "Erreur lors du chargement des données de réalisations.";
}
?>
