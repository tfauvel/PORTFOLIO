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
include '/var/www/html/portfolio/menudenavigation.php';
?>


</header>



<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/yaml/yaml.php");
$data = yaml_parse_file($_SERVER['DOCUMENT_ROOT'] . '/data/Accueil.yaml');

echo '<div id="Accueil">';
echo '<h1>Accueil</h1>';
echo "<p>" . $data['Prenom'] . "</p>";
echo "<p>" . $data['nom'] . "</p>";
echo "<p>" . $data['Accroche'] . "</p>";
echo "<p>" . $data['Presentation'] . "</p>";
echo '</div>';
  
include '/var/www/html/portfolio/footer.php';

?>



</body>
</html>
