<?php


// 1. Se connecter à la base (via config.php)
require 'config.php';
// 2. Récupérer les données du formulaire ($_POST)
if ($_SERVER['REQUEST_METHOD']!== 'POST'){
//Recuperer chaque champs

    header('Location: checkout.html');
    exit;

}

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$tel = $_POST['tel'];
$mail = $_POST['mail'];
$adresse = $_POST['adresse'];
$ville = $_POST['ville'];
// 3. Préparer la requête SQL d'insertion
// sql contient la requete sql
$sql = 'INSERT INTO commandes (nom, prenom, telephone, email, adresse, ville)
        VALUES (?, ?, ?, ?, ?, ?)';
// contient la requete sql préparée 
$marequete =  $pdo->prepare($sql);
$marequete->execute([$nom, $prenom, $tel, $mail, $adresse, $ville]);

// 4. Exécuter la requête avec les bonnes valeurs
// 5. Rediriger vers confirmation.php

header('Location: confirmation.php');
exit;
?>