<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="../assets/css/style.css" rel="stylesheet"/>
    <title></title>
</head>
<body>

    <h1>Competences</h1>

</body>
</html>


<?php

require_once("C:/xampp/htdocs/portfolio/yaml/yaml.php");
$data = yaml_parse_file('C:/xampp/htdocs/portfolio/data/Competences.yaml'); 

foreach ($data as $domaine) {
    echo "<p><strong>Domaine : " . htmlspecialchars($domaine['domaine']) . "</strong></p>";
    
    foreach ($domaine['items'] as $item) {
        echo "<p>" . htmlspecialchars($item['nom']) . " : Niveau " . $item['niveau'] . "</p>";
    }
}

?>
