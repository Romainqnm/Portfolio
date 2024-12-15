<?php
// Charger les données YAML
if (!function_exists('yaml_parse_file')) {
    die("L'extension YAML n'est pas activée sur ce serveur.");
}

$competences = yaml_parse_file(__DIR__ . '/../data/competences.yml');

if ($competences) {
    echo "<h3>{$competences['titre']}</h3>";

    // Section Langages de Programmation
    echo "<h4>Langages de Programmation</h4><ul>";
    foreach ($competences['languages-prog'] as $langage) {
        echo "<li><strong>{$langage['nom']}</strong> ({$langage['duree-apprentissage']} {$langage['unite']}): ";
        echo "{$langage['description']} Niveau: {$langage['niveau']}</li>";
    }
    echo "</ul>";

    // Section Langues
    echo "<h4>Langues</h4><ul>";
    foreach ($competences['langues'] as $langue) {
        echo "<li><strong>{$langue['nom']}</strong> ({$langue['duree-apprentissage']} {$langue['unite']}): ";
        echo "{$langue['description']} Niveau: {$langue['niveau']}</li>";
    }
    echo "</ul>";

    // Section Réseaux et Autres Compétences
    echo "<h4>Compétences Réseau</h4><ul>";
    foreach ($competences['competences-reseau'] as $competence) {
        echo "<li><strong>{$competence['domaine']}</strong>: {$competence['description']} Niveau: {$competence['niveau']}</li>";
    }
    echo "</ul>";

    echo "<h4>Autres Compétences</h4><ul>";
    foreach ($competences['autres-competences'] as $autre) {
        echo "<li><strong>{$autre['nom']}</strong>: {$autre['description']} Niveau: {$autre['niveau']}</li>";
    }
    echo "</ul>";
} else {
    echo "Erreur lors du chargement des données de compétences.";
}
?>
