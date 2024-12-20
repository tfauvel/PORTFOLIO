<?php

require_once("C:/xampp/htdocs/portfolio/yaml/yaml.php");
$data = yaml_parse_file('C:/xampp/htdocs/portfolio/data/Contact.yaml');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Traitement du formulaire
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $objet = $_POST['objet'];
    $message = $_POST['message'];
    $captcha = $_POST['captcha'];

    // Vérification simple du captcha (exemple basique)
    if ($captcha == "1234") {
        // Envoyer l'email ou traiter les données comme nécessaire
        echo "<p class='success'>Merci pour votre message, $nom. Nous vous répondrons bientôt.</p>";
    } else {
        echo "<p class='error'>Le captcha est incorrect.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../assets/css/style.css" rel="stylesheet"/>
    <title>Formulaire de Contact</title>

</head>

<header>

<?php
include $_SERVER['DOCUMENT_ROOT'] . '/portfolio/menudenavigation.php';
?>

</header>

<body>
    <div class="container">
        <h1>Formulaire de Contact</h1>

        <form action="" method="POST">
            <label for="nom">Nom de l'expéditeur :</label>
            <input type="text" id="nom" name="nom" required><br>

            <label for="email">Adresse de courriel de l'expéditeur :</label>
            <input type="email" id="email" name="email" required><br>

            <label for="objet">Objet du message :</label>
            <input type="text" id="objet" name="objet" required><br>

            <label for="message">Contenu du message :</label>
            <textarea id="message" name="message" required></textarea><br>

            <label for="captcha">Captcha (entrez 1234) :</label>
            <input type="text" id="captcha" name="captcha" required><br>

            <button type="submit">Envoyer</button>
        </form>
    </div>
</body>
</html>
