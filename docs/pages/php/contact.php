<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Charger automatiquement les classes (via Composer)
require __DIR__ . '/../../vendor/autoload.php';

// Variables pour l'état de confirmation
$confirmation = '';
$erreurs = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupération des champs avec validation de base
    $nom = htmlspecialchars(trim($_POST['nom']));
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $objet = htmlspecialchars(trim($_POST['objet']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validation des champs
    if (!$nom) {
        $erreurs[] = "Le champ 'Nom' est obligatoire.";
    }
    if (!$email) {
        $erreurs[] = "Un email valide est obligatoire.";
    }
    if (!$objet) {
        $erreurs[] = "Le champ 'Objet' est obligatoire.";
    }
    if (!$message) {
        $erreurs[] = "Le champ 'Message' est obligatoire.";
    }

    // Si tout est valide
    if (empty($erreurs)) {
        $mail = new PHPMailer(true);

        try {
            // Configuration du serveur SMTP
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'romain.qnm@gmail.com'; // Ton adresse Gmail
            $mail->Password = 'bzyhetcgmavxrhso'; // Ton mot de passe d'application
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = 587;
            

            // Configuration des e-mails
            $mail->setFrom('ton.email@gmail.com', 'Formulaire Contact'); // Expéditeur
            $mail->addAddress('romain.qnm@gmail.com'); // Destinataire
            $mail->addReplyTo($email, $nom);

            $mail->Subject = "Message de $nom - $objet";
            $mail->Body = "Nom: $nom\nEmail: $email\nObjet: $objet\n\nMessage:\n$message";

            $mail->send();
            $confirmation = "Votre message a bien été envoyé.";
        } catch (Exception $e) {
            $confirmation = "Erreur lors de l'envoi : " . htmlspecialchars($mail->ErrorInfo);
        }
    }
}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Clé secrète
    $secret = '6LcltqQqAAAAAMrrMjPFzllZy_Ce0hiHXZraQVot';
    
    // Vérification que le champ g-recaptcha-response est présent
    if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
        $response = $_POST['g-recaptcha-response'];
        $remote_ip = $_SERVER['REMOTE_ADDR'];

        // Requête vers l'API reCAPTCHA
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = [
            'secret' => $secret,
            'response' => $response,
            'remoteip' => $remote_ip
        ];

        // Effectuer la requête POST
        $options = [
            'http' => [
                'method'  => 'POST',
                'header'  => "Content-Type: application/x-www-form-urlencoded\r\n",
                'content' => http_build_query($data),
            ],
        ];
        $context = stream_context_create($options);
        $verify = @file_get_contents($url, false, $context);

        // Vérification si la requête a réussi
        if ($verify !== false) {
            $captcha_success = json_decode($verify);

            if ($captcha_success->success) {
                // CAPTCHA validé, traitement du formulaire
                echo "Formulaire envoyé avec succès!";
            } else {
                // CAPTCHA échoué
                echo "Erreur CAPTCHA : " . htmlspecialchars($captcha_success->{'error-codes'}[0] ?? 'Inconnue');
            }
        } else {
            // Erreur lors de l'appel à l'API reCAPTCHA
            echo "Erreur lors de la vérification du CAPTCHA. Veuillez réessayer plus tard.";
        }
    } else {
        // Champ reCAPTCHA manquant
        echo "Veuillez cocher le CAPTCHA.";
    }
}

?>

