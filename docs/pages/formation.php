<?php
// Vérifier si l'extension YAML est activée
if (!function_exists('yaml_parse_file')) {
    die("L'extension YAML n'est pas activée sur ce serveur.");
}

// Charger le fichier YAML
$formation = yaml_parse_file(__DIR__ . '/../data/formation.yml');

if ($formation) {
    echo "<h3>{$formation['titre']}</h3>";

    // Section Formation
    echo "<h4>Parcours Scolaire</h4><ul>";
    foreach ($formation['Formation'] as $etude) {
        echo "<li><strong>{$etude['diplome']}</strong> à {$etude['établissement']} ({$etude['période-apprentissage']}) - {$etude['lieu']}<br>";
        echo "<em>Description :</em> {$etude['description']}</li><br>";
    }
    echo "</ul>";

    // Section Expérience Professionnelle
    echo "<h4>Expériences Professionnelles</h4><ul>";
    foreach ($formation['ExperiencePro'] as $experience) {
        echo "<li><strong>{$experience['nom-fonction']}</strong> chez {$experience['entreprise']} ({$experience['année']} - {$experience['durée']})<br>";
        echo "<em>Description :</em> {$experience['descriptif']}</li><br>";
    }
    echo "</ul>";
} else {
    echo "Erreur lors du chargement des données de formation.";
}
?>
