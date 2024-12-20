<?php
// Afficher le menu uniquement si ce n'est pas la page principale
if (!isset($isMainPage) || !$isMainPage) {
?>
  
  <nav class="navbar">
    <a id="navbar2" href="../index.php">PORTFOLIO</a>    
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
