<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    // Traitez les données ici (par exemple, envoyez un e-mail, enregistrez-les dans une base de données, etc.)

    // Redirigez l'utilisateur vers une page de confirmation ou une autre page de votre choix
    header("Location: confirmation.php");
    exit;
}
?>
