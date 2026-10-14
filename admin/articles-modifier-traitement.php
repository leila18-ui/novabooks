<?php
// Connexion à MySQL
require 'config.php';

// Vérifier que la méthode est POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: articles.php');
    exit;
}

// Récupérer les données
$id = (int)$_POST['id'];
$titre = $_POST['titre'];
$auteur = $_POST['auteur'];
$prix = (int)$_POST['prix'];
$categorie = $_POST['categorie'];
$image = $_POST['image'];
$description = $_POST['description'];
$stock = (int)$_POST['stock'];

// Mettre à jour dans MySQL
$sql = "UPDATE articles 
        SET titre = ?, auteur = ?, prix = ?, categorie = ?, image = ?, description = ?, stock = ?
        WHERE id = ?";

$stmt = $pdo->prepare($sql);
$stmt->execute([$titre, $auteur, $prix, $categorie, $image, $description, $stock, $id]);

// Rediriger vers la liste
header('Location: articles.php');
exit;
?>