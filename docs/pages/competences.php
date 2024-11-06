<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compétences - Portfolio - R.Q</title>
    <link rel="stylesheet" href="css\page-principale.css">
</head>
<body>
<?php

require_once("yaml/yaml.php");
$data=yaml_parse_file('..\yml\competences.yml');

echo "<h1>".$data["titre"]."</h1>\n";

echo "<h2>Les langages de programmation que je maîtrise</h2>\n";
foreach($data[""] AS $Langage){
	echo "<p>".ucfirst($Langage["nom"])." : ".$Langage["duree-apprentissage"]." ".$Langage["unite"]." ".$Langage["niveau"]."</p>\n";
}
?>
</body>
</html>