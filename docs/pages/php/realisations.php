<?php
use Symfony\Component\Yaml\Yaml;

try {
    $yamlFile = realpath(__DIR__ . '/../yml/realisations.yml');
    if (!$yamlFile) {
        throw new Exception('Fichier YAML introuvable.');
    }

    $data = Yaml::parseFile($yamlFile);

    echo "<section id='realisations' class='section'>";
    echo "<h2>" . htmlspecialchars($data['titre']) . "</h2>";

    // Réalisations Scolaires
    if (isset($data['realisation-scolaire'])) {
        echo "<h3>Réalisations Scolaires</h3>";
        foreach ($data['realisation-scolaire'] as $realisation) {
            $type = htmlspecialchars($realisation['type-realisation'] ?? 'Type non spécifié');
            $matiere = htmlspecialchars($realisation['matière'] ?? 'Matière non spécifiée');
            $nom = htmlspecialchars($realisation['nom-realisation'] ?? 'Nom non spécifié');
            $description = nl2br(htmlspecialchars($realisation['description'] ?? 'Pas de description'));
            $link = $realisation['link'] ?? null;
            $fichier_pdf = $realisation['fichier_pdf'] ?? null;

            echo "<div class='realisation'>";
            echo "<h4>$nom</h4>";
            echo "<p><strong>Type :</strong> $type</p>";
            echo "<p><strong>Matière :</strong> $matiere</p>";
            echo "<p>$description</p>";
            echo "<br>";

            // Lien externe
            if ($link) {
                echo "<p><a href='$link' target='_blank'>Voir en ligne</a></p>";
                echo "<br>";
                echo "<br>";

            }

            // Lien PDF
            if ($fichier_pdf) {
                echo "<p><a href='$fichier_pdf' target='_blank'>Télécharger le fichier PDF</a></p>";
                echo "<br>";
                echo "<br>";

            }

            echo "</div>";
        }
    }

    // Réalisations de Loisir
    if (isset($data['realisation-loisir'])) {
        echo "<h3>Réalisations de Loisir</h3>";
        foreach ($data['realisation-loisir'] as $realisation) {
            $type = htmlspecialchars($realisation['type-realisation'] ?? 'Type non spécifié');
            $projet = htmlspecialchars($realisation['projet'] ?? 'Projet non spécifié');
            $description = nl2br(htmlspecialchars($realisation['description'] ?? 'Pas de description'));
            $link = $realisation['link'] ?? null;

            echo "<div class='realisation'>";
            echo "<h4>$projet</h4>";
            echo "<p><strong>Type :</strong> $type</p>";
            echo "<p>$description</p>";
            echo "<br>";

            // Lien externe
            if ($link) {
                echo "<p><a href='$link' target='_blank'>Voir en ligne</a></p>";
                echo "<br>";
                echo "<br>";

            }

            echo "</div>";
        }
    }

    // Certifications
    if (isset($data['certifications'])) {
        echo "<h3>Certifications</h3>";
        foreach ($data['certifications'] as $certification) {
            $nom = htmlspecialchars($certification['nom-certif'] ?? 'Nom non spécifié');
            $description = nl2br(htmlspecialchars($certification['description'] ?? 'Pas de description'));
            $fichier_pdf = $certification['fichier_pdf'] ?? null;

            echo "<div class='realisation'>";
            echo "<h4>$nom</h4>";
            echo "<p>$description</p>";
            echo "<br>";


            // Lien PDF
            if ($fichier_pdf) {
                echo "<p><a href='$fichier_pdf' target='_blank'>Télécharger le fichier PDF</a></p>";
                echo "<br>";
                echo "<br>";

            }

            echo "</div>";
        }
    }

    echo "</section>";
} catch (Exception $e) {
    echo 'Erreur lors du chargement des réalisations : ' . htmlspecialchars($e->getMessage());
}
?>
