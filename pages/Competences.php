<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link href="../assets/css/style.css" rel="stylesheet"/>
    <title>Compétences</title>
</head>
<body>

<header>
<?php
include '/var/www/html/portfolio/menudenavigation.php';
?>
</header>

<div id="Competences">
    <h1>Compétences</h1>

    <?php
    // Inclusion de yaml.php avec un chemin absolu correct
    require_once($_SERVER['DOCUMENT_ROOT'] . '/yaml/yaml.php');

    // Chargement du fichier YAML
    $data = yaml_parse_file($_SERVER['DOCUMENT_ROOT'] . '/data/Competences.yaml');

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

    // Affichage des compétences
    foreach ($data as $domaine) {
        echo "<div class='competence'>";
        echo "<h3>Domaine : " . htmlspecialchars($domaine['domaine']) . "</h3>";

        foreach ($domaine['items'] as $item) {
            $etoiles = afficher_etoiles($item['niveau']);
            echo "<p>" . htmlspecialchars($item['nom']) . " : " . $etoiles . "</p>";
        }

        echo "</div>";
    }

    ?>


</div>

<?php include '/var/www/html/portfolio/footer.php'; ?>

</body>
</html>

