<?php
if (!function_exists('yaml_parse_file')) {
    die("L'extension YAML n'est pas activée sur ce serveur.");
}

$competences = yaml_parse_file('competences.yaml');

if (!$competences) {
    die("Erreur lors du chargement du fichier YAML.");
}

$titre = $competences['titre'];
$languagesProg = $competences['languages-prog'];
$langues = $competences['langues'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($titre) ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }
        h1, h2 {
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f4f4f4;
        }
    </style>
</head>
<body>
    <h1><?= htmlspecialchars($titre) ?></h1>

    <h2>Langages de Programmation</h2>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Durée d'Apprentissage</th>
                <th>Niveau</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($languagesProg as $langage): ?>
                <tr>
                    <td><?= htmlspecialchars($langage['nom']) ?></td>
                    <td><?= htmlspecialchars($langage['duree-apprentissage']) ?> <?= htmlspecialchars($langage['unite']) ?></td>
                    <td><?= htmlspecialchars($langage['niveau']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <h2>Langues</h2>
    <table>
        <thead>
            <tr>
                <th>Nom</th>
                <th>Durée d'Apprentissage</th>
                <th>Niveau</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($langues as $langue): ?>
                <tr>
                    <td><?= htmlspecialchars($langue['nom']) ?></td>
                    <td><?= htmlspecialchars($langue['duree-apprentissage']) ?> <?= htmlspecialchars($langue['unite']) ?></td>
                    <td><?= htmlspecialchars($langue['niveau']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
