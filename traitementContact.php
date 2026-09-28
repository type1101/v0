<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST['nom']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST['message']);

    $destinataire = "dalilbounar@gmail.com";
    $sujet = "Nouveau message de : $nom";
    $contenu = "Nom: $nom\nEmail: $email\n\nMessage:\n$message";
    
    $headers = "From: $email";

    if (mail($destinataire, $sujet, $contenu, $headers)) {
        echo "Message envoyé avec succès !";
    } else {
        echo "Une erreur s'est produite lors de l'envoi.";
    }
}
