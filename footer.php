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
     
<footer>
    <p>&copy; 2024 Théo Fauvel. Tous droits réservés.</p>
    <div class="social-icons">
        <a href="https://instagram.com" target="_blank" aria-label="Instagram">
            <img src="/assets/images/instagram-icon.png" alt="Instagram">
        </a>
        <a href="https://github.com" target="_blank" aria-label="GitHub">
            <img src="/assets/images/github-icon.png" alt="GitHub">
        </a>
        <a href="https://linkedin.com" target="_blank" aria-label="LinkedIn">
            <img src="/assets/images/linkedin-icon.png" alt="LinkedIn">
        </a>
    </div>
</footer>



<?php
}
?>
