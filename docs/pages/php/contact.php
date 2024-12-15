<?php
// Traitement du formulaire après soumission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sécurisation des données
    $nom = htmlspecialchars(trim($_POST['nom']));
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $objet = htmlspecialchars(trim($_POST['objet']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Vérification des champs requis
    if ($nom && $email && $objet && $message) {
        // Configuration de l'envoi de l'email
        $to = "romain.qnm@gmail.com";
        $subject = "Message de $nom - $objet";
        $body = "Nom: $nom\nEmail: $email\nObjet: $objet\n\nMessage:\n$message";
        $headers = "From: $email\r\nReply-To: $email";

        // Tentative d'envoi de l'email
        if (mail($to, $subject, $body, $headers)) {
            $confirmation = "Message envoyé avec succès !";
        } else {
            $confirmation = "Une erreur est survenue. Veuillez réessayer.";
        }
    } else {
        $confirmation = "Tous les champs sont obligatoires.";
    }
}
?>

<!-- Formulaire de contact -->
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
<?php if (isset($confirmation)): ?>
    <p class="confirmation"><?= htmlspecialchars($confirmation); ?></p>
<?php endif; ?>

<!-- Message RGPD -->
<p class="rgpd-message">
    Conformément au Règlement Général sur la Protection des Données (RGPD), les informations 
    renseignées dans ce formulaire ne seront utilisées qu'à des fins de contact. Elles ne seront ni stockées, 
    ni partagées, ni revendues. Une fois le message envoyé, aucune donnée ne sera conservée.
</p>
