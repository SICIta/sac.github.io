<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $telephone = $_POST['telephone'];
    $adresse = $_POST['adresse'];
    $wilaya = $_POST['wilaya'];
    
    $to = "cyliatlb@gmail.com"; // Remplacez par votre adresse e-mail
    $subject = "Nouvelle commande de sac et pochette";
    $message = "Nom: $nom\n";
    $message .= "Prénom: $prenom\n";
    $message .= "Téléphone: $telephone\n";
    $message .= "Adresse: $adresse\n";
    $message .= "Wilaya: $wilaya\n";
    
    mail($to, $subject, $message);
}
?>
