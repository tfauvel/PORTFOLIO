<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="../assets/css/style.css" rel="stylesheet"/>
    <title>Compétences</title>
</head>
<body>

    <h1>Compétences</h1>

<?php

require_once("C:/xampp/htdocs/portfolio/yaml/yaml.php");
$data = yaml_parse_file('C:/xampp/htdocs/portfolio/data/Competences.yaml'); 

function afficher_etoiles($niveau) {
    $etoiles = '';
    for ($i = 1; $i <= 5; $i++) {
        if ($i <= $niveau) {
            $etoiles .= '★';  // Affiche une étoile pleine
        } else {
            $etoiles .= '☆';  // Affiche une étoile vide
        }
    }
    return $etoiles;
}

foreach ($data as $domaine) {
    echo "<p><strong>Domaine : " . htmlspecialchars($domaine['domaine']) . "</strong></p>";
    
    foreach ($domaine['items'] as $item) {
        $etoiles = afficher_etoiles($item['niveau']);
        echo "<p>" . htmlspecialchars($item['nom']) . " : " . $etoiles . "</p>";
    }
}

?>

</body>
</html>
