<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link href="assets/css/style.css" rel="stylesheet"/>
  <title>PortFolio</title>
</head>

<body>

<header>

<h2>Portfolio</h2> 

  <nav class="navbar">    
    <a href="/portfolio/pages/Accueil.php">Accueil</a>
    <a href="/portfolio/pages/Competences.php">Compétences</a>
    <a href="/portfolio/pages/Realisations.php">Réalisations</a>
    <a href="/portfolio/pages/Formations.php">Formation</a>
    <a href="/portfolio/pages/contact.php">Contact</a> 
    <a href="/portfolio/assets/CV.pdf" download>CV</a> 
  </nav>

<?php
// Définir une variable pour indiquer qu'on est sur la page principale
$isMainPage = true;

// Inclure le menu
include 'menudenavigation.php';
?>




<!-- --------------------------------------------------------------- -->

</header>

<div class="main">


<div>
<?php Include('C:/xampp/htdocs/portfolio/pages/Accueil.php'); ?>
</div>

<!-- --------------------------------------------------------------- -->


<div>
<?php Include('C:/xampp/htdocs/portfolio/pages/Competences.php'); ?>
</div>

<!-- --------------------------------------------------------------- -->


<div>
<?php Include('C:/xampp/htdocs/portfolio/pages/Realisations.php'); ?>
</div>

<!-- --------------------------------------------------------------- -->


<div>
<?php Include('C:/xampp/htdocs/portfolio/pages/Formations.php'); ?>
</div>

<!-- --------------------------------------------------------------- -->

<div>
<?php Include('C:/xampp/htdocs/portfolio/pages/contact.php'); ?>
</div>

</div>

</body>
</html>  