<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link href="assets/css/style.css" rel="stylesheet"/>
  <title>PortFolio</title>
</head>

<script>

// Lorsque l'utilisateur fait défiler la page
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  // Si la page est descendue de 100px, on affiche le bouton
  if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
    document.getElementById("scrollTopBtn").style.display = "block";
  } else {
    document.getElementById("scrollTopBtn").style.display = "none";
  }
}

// Lorsque l'utilisateur clique sur le bouton, on revient en haut de la page
document.getElementById("scrollTopBtn").onclick = function() {
  window.scrollTo({top: 0, behavior: 'smooth'});
  return false; // Empêche le comportement par défaut de l'ancre <a>
};

</script>

<body>

<header>

<h2>Portfolio</h2> 

  <nav class="navbar">    
    <a href="pages/Accueil.php">Accueil</a>
    <a href="pages/Competences.php">Compétences</a>
    <a href="pages/Realisations.php">Réalisations</a>
    <a href="pages/Formations.php">Formation</a>
    <a href="pages/contact.php">Contact</a> 
    <a href="/portfolio/assets/CV.pdf" download>CV</a> 
  </nav>

<?php
// Définir une constante pour indiquer qu'on est sur la page principale
define('IS_MAIN_PAGE', true);

// Inclure le fichier de navigation
include 'menudenavigation.php';
?>





<!-- --------------------------------------------------------------- -->

</header>


<a href="#" id="scrollTopBtn" title="Retour en haut">↑</a>


<div class="main">


<div>
<?php include('pages/Accueil.php'); ?>
</div>

<!-- --------------------------------------------------------------- -->


<div>
<?php include('pages/Competences.php'); ?>
</div>

<!-- --------------------------------------------------------------- -->


<div>
<?php include('pages/Realisations.php'); ?>
</div>

<!-- --------------------------------------------------------------- -->


<div>
<?php include('pages/Formations.php'); ?>
</div>

<!-- --------------------------------------------------------------- -->

<div>
<?php include('pages/contact.php'); ?>
</div>

</div>

<footer>
    <p>&copy; 2024 Théo Fauvel. Tous droits réservés.</p>
    <div class="social-icons">
        <a href="https://instagram.com" target="_blank" aria-label="Instagram">
            <img src="assets/images/instagram-icon.png" alt="Instagram">
        </a>
        <a href="https://github.com" target="_blank" aria-label="GitHub">
            <img src="assets/images/github-icon.png" alt="GitHub">
        </a>
        <a href="https://linkedin.com" target="_blank" aria-label="LinkedIn">
            <img src="assets/images/linkedin-icon.png" alt="LinkedIn">
        </a>
    </div>
</footer>

</body>
</html>  
