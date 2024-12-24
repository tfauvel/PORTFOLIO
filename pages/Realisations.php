<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <link href="../assets/css/style.css" rel="stylesheet"/>
    <title>Réalisations</title>
</head>
<body>

<div class="page-container"> <!-- Conteneur principal -->
    <header>
        <?php
        include '/var/www/html/portfolio/menudenavigation.php';
        ?>
    </header>

    <main>
        <h1>Réalisations</h1>
        <div id="Realisations">
            <?php
            // Inclusion de yaml.php avec un chemin absolu correct
            require_once($_SERVER['DOCUMENT_ROOT'] . '/yaml/yaml.php');

            // Chargement du fichier YAML
            $data = yaml_parse_file($_SERVER['DOCUMENT_ROOT'] . '/data/Realisations.yaml');

            foreach ($data['realisations'] as $realisation) {
                echo "<div class='realisation'>";
                echo "<p><strong>" . htmlspecialchars($realisation['titre']) . "</strong></p>";
                echo "<p>" . htmlspecialchars($realisation['description']) . "</p>";
                echo "<div class='image-container'>";
                echo '<img src="' . htmlspecialchars($realisation['illustration']) . '" alt="' . htmlspecialchars($realisation['titre']) . '">';
                echo "</div>";
                echo '<a href="' . htmlspecialchars($realisation['documents'][0]) . '" target="_blank" class="view-doc">Voir le document</a>';
                echo "</div>";
            }
            ?>
        </div>
    </main>
</div>
</body>

<?php include '/var/www/html/portfolio/footer.php'; ?>

</html>



