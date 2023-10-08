<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Adresse e-mail où vous souhaitez recevoir les données du formulaire
    $to = "Speeddepanage@gmail.com";

    // Sujet de l'e-mail
    $subject = "Nouveau message du formulaire de contact de Speed Dépannage";

    // Corps de l'e-mail
    $message = "Nom: $name\n";
    $message .= "Email: $email\n";
    $message .= "Téléphone: $phone\n";
    $message .= "Message:\n$message";

    // Entêtes de l'e-mail
    $headers = "From: $email";

    // Envoi de l'e-mail
    if (mail($to, $subject, $message, $headers)) {
        // Redirigez l'utilisateur vers une page de confirmation
        header("Location: confirmation.php");
        exit;
    } else {
        // En cas d'échec de l'envoi de l'e-mail, redirigez l'utilisateur vers une page d'erreur
        header("Location: erreur.php");
        exit;
    }
}
?>
