<?php
// Inclusion de PHPMailer via Composer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__. '/../yaml/vendor/autoload.php'; // Assurez-vous que le fichier autoload.php de Composer est inclus

// Variables pour stocker le message de retour
$messageFeedback = "";

// Traitement du formulaire
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $objet = $_POST['objet'];
    $message = $_POST['message'];
    $captcha = $_POST['captcha'];

    // Vérification du captcha
    if ($captcha == "1234") {
        try {
            // Configuration de PHPMailer pour utiliser le SMTP de Gmail
            $mail = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Serveur SMTP de Gmail
            $mail->SMTPAuth = true;
            $mail->Username = 'theo.fauvel@sts-sio-caen.info'; // Remplacez par votre adresse Gmail
            $mail->Password = 'Filou50190..'; // Remplacez par votre mot de passe Gmail
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Destinataire
            $mail->setFrom('votre_email@gmail.com', 'Votre Nom');
            $mail->addAddress('theo.fauvel@sts-sio-caen.info'); // Remplacez par l'adresse de votre destinataire

            // Contenu de l'email
            $mail->isHTML(true);
            $mail->Subject = $objet;
            $mail->Body    = "Nom: $nom<br>Email: $email<br>Message: $message";
            $mail->AltBody = "Nom: $nom\nEmail: $email\nMessage: $message";

            // Envoi de l'email
            $mail->send();
            $messageFeedback = "<p class='success'>Merci pour votre message, $nom. Nous vous répondrons bientôt.</p>";
        } catch (Exception $e) {
            $messageFeedback = "<p class='error'>Une erreur est survenue lors de l'envoi de votre message. Erreur : {$mail->ErrorInfo}</p>";
        }
    } else {
        $messageFeedback = "<p class='error'>Le captcha est incorrect.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/assets/css/style.css" rel="stylesheet"/>
    <title>Formulaire de Contact</title>
</head>

<body>
    <header>
        <?php include '/var/www/html/portfolio/menudenavigation.php'; ?>
    </header>

    <div class="container">
        <h1>Formulaire de Contact</h1>

        <!-- Affichage du message de retour -->
        <?php echo $messageFeedback; ?>

        <!-- Formulaire de contact -->
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

<?php include '/var/www/html/portfolio/footer.php'; ?>

</body>
</html>

