<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Sécurisation des données reçues
    $nom = htmlspecialchars(trim($_POST["nom"]));
    $prenom = htmlspecialchars(trim($_POST["prenom"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $personnes = (int)$_POST["personnes"];

    // Validation basique
    if (empty($nom) || empty($prenom) || empty($email) || $personnes < 1) {
        echo "<h2>Erreur : Veuillez remplir tous les champs correctement.</h2>";
        exit;
    }

    // Simuler le traitement de la réservation (ex : envoi email ou base de données)
    // Pour le moment, on affiche simplement un message de confirmation

    echo "<h2>Merci pour votre réservation !</h2>";
    echo "<p><strong>Nom :</strong> " . $nom . "</p>";
    echo "<p><strong>Prénom :</strong> " . $prenom . "</p>";
    echo "<p><strong>Email :</strong> " . $email . "</p>";
    echo "<p><strong>Nombre de personnes :</strong> " . $personnes . "</p>";
    echo "<p>Nous avons bien reçu votre demande. Un email de confirmation vous sera envoyé bientôt.</p>";
} else {
    // Si la page est accédée sans soumission du formulaire
    echo "<h2>Accès non autorisé.</h2>";
}
?>
