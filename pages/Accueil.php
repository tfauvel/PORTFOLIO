<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="../assets/css/style.css" rel="stylesheet"/>
	<title></title>
</head>
<body>

	<h1>Accueil</h1>


</body>
</html>


<?php

require_once("C:/xampp/htdocs/portfolio/yaml/yaml.php");
$data=yaml_parse_file('C:/xampp/htdocs/portfolio/data/Accueil.yaml');

echo "<p>" . $data['Prenom'] . "</p>";
echo "<p>" . $data['nom'] . "</p>";
echo "<p>" . $data['Accroche'] . "</p>";
echo "<p>" . $data['Presentation'] . "</p>";

?>


