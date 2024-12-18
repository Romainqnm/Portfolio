<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/vendor/autoload.php'; // Inclut PHPMailer

$confirmation = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = htmlspecialchars(trim($_POST['nom']));
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $objet = htmlspecialchars(trim($_POST['objet']));
    $message = htmlspecialchars(trim($_POST['message']));

    if ($nom && $email && $objet && $message) {
        $mail = new PHPMailer(true);

        try {
            // Paramètres du serveur SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com'; // Serveur SMTP de Gmail
            $mail->SMTPAuth = true;
            $mail->Username = 'ton.email@gmail.com'; // Ton adresse Gmail
            $mail->Password = 'ton_mot_de_passe'; // Ton mot de passe Gmail ou mot de passe d'application
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;

            // Configuration des e-mails
            $mail->setFrom($email, $nom);
            $mail->addAddress('romain.qnm@gmail.com'); // Destinataire
            $mail->addReplyTo($email, $nom);

            $mail->Subject = "Message de $nom - $objet";
            $mail->Body = "Nom: $nom\nEmail: $email\nObjet: $objet\n\nMessage:\n$message";

            $mail->send();
            $confirmation = "Message envoyé avec succès !";
        } catch (Exception $e) {
            $confirmation = "Erreur lors de l'envoi : " . $mail->ErrorInfo;
        }
    } else {
        $confirmation = "Tous les champs sont obligatoires.";
    }
}
?>

<!-- Formulaire HTML -->
<form action="#contact" method="POST">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required>

    <label for="email">Email :</label>
    <input type="email" id="email" name="email" required>

    <label for="objet">Objet du message :</label>
    <input type="text" id="objet" name="objet" required>

    <label for="message">Message :</label>
    <textarea id="message" name="message" required></textarea>

    <button type="submit">Envoyer</button>
</form>

<!-- Message de confirmation -->
<?php if ($confirmation): ?>
    <p class="confirmation"><?= htmlspecialchars($confirmation); ?></p>
<?php endif; ?>
