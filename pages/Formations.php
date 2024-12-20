<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="../assets/css/style.css" rel="stylesheet"/>
    <title></title>
</head>
<body>

<header>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/portfolio/menudenavigation.php';
?>

</header>

    <h1>Formations</h1>

</body>
</html>


<?php

require_once("C:/xampp/htdocs/portfolio/yaml/yaml.php");
$data = yaml_parse_file('C:/xampp/htdocs/portfolio/data/Formations.yaml');

// Afficher les données
foreach ($data as $item) {
    echo "<h3>" . htmlspecialchars($item['nom']) . "</h3>";
    echo "<p><strong>Établissement :</strong> " . htmlspecialchars($item['etablissement']) . "</p>";
    echo "<p><strong>Dates :</strong> " . htmlspecialchars($item['date_debut']) . " - " . htmlspecialchars($item['date_fin']) . "</p>";
    echo "<p><strong>Lieu :</strong> " . htmlspecialchars($item['lieu']) . "</p>";
    echo "<p><strong>Contenu :</strong> " . htmlspecialchars($item['contenu']) . "</p>";
}

?>
