<?php

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['mail'];
$sujet = $_POST['sujet'];
$message = $_POST['message'];

echo "Nom: " . $nom . ", Prénom: " . $prenom . ", mail: " . $email . ", sujet: " . $sujet . "<br><br>";
echo "Message: " . $message;