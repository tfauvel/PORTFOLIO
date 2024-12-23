<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="../assets/css/style.css" rel="stylesheet"/>
    <title>Formations</title>
</head>
<body>

<header>
<?php
include '/var/www/html/portfolio/menudenavigation.php';
?>
</header>

<div id="Formations">
    <h1>Formations</h1>

    <?php
    // Inclusion de yaml.php avec un chemin absolu correct
    require_once($_SERVER['DOCUMENT_ROOT'] . '/yaml/yaml.php');

    // Chargement du fichier YAML
    $data = yaml_parse_file($_SERVER['DOCUMENT_ROOT'] . '/data/Formations.yaml');

    // Afficher les données
    foreach ($data as $item) {
        echo "<div class='formation'>";
        echo "<h3>" . htmlspecialchars($item['nom']) . "</h3>";
        echo "<p><strong>Établissement :</strong> " . htmlspecialchars($item['etablissement']) . "</p>";
        echo "<p><strong>Dates :</strong> " . htmlspecialchars($item['date_debut']) . " - " . htmlspecialchars($item['date_fin']) . "</p>";
        echo "<p><strong>Lieu :</strong> " . htmlspecialchars($item['lieu']) . "</p>";
        echo "<p><strong>Contenu :</strong> " . htmlspecialchars($item['contenu']) . "</p>";
        echo "</div>";
    }
    ?>
</div>

<?php include '/var/www/html/portfolio/footer.php'; ?>

</body>
</html>

