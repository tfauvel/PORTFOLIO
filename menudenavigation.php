<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link href="assets/css/style.css" rel="stylesheet"/>
	<title></title>
</head>
<body>

</body>
</html>


<?php
// Afficher le menu uniquement si ce n'est pas la page principale
if (!defined('IS_MAIN_PAGE')) {
?>
	<a id="retour" href="../index.php">Portfolio</a>

  <nav class="navbar">
    <a id="navbar2" href="Accueil.php">Accueil</a>
    <a id="navbar2" href="Competences.php">Compétences</a>
    <a id="navbar2" href="Realisations.php">Réalisations</a>
    <a id="navbar2" href="Formations.php">Formation</a>
    <a id="navbar2" href="contact.php">Contact</a> 
    <a id="navbar2" href="/portfolio/assets/CV.pdf" download>CV</a> 
  </nav>

<?php
}
?>
