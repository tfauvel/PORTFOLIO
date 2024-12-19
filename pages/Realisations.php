<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="../assets/css/style.css" rel="stylesheet"/>
    <title></title>
</head>
<body>

    <h1>Realisations</h1>

</body>
</html>


<?php

require_once("C:/xampp/htdocs/portfolio/yaml/yaml.php");
$data = yaml_parse_file('C:/xampp/htdocs/portfolio/data/Realisations.yaml');

foreach ($data['realisations'] as $realisation) {
    echo "<p><strong>Titre :</strong> " . $realisation['titre'] . "</p>";
    echo "<p><strong>Description :</strong> " . $realisation['description'] . "</p>";
    echo '<img src="' . htmlspecialchars($realisation['illustration']) . '" alt="Illustration de ' . htmlspecialchars($realisation['titre']) . '" style="max-width: 300px;">';
    echo '<a href="' . htmlspecialchars($realisation['documents'][0]) . '" target="_blank">Voir le document</a>';

}

?>
