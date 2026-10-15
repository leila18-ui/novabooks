<<<<<<< HEAD
<?php
// Connexion à MySQL
require 'config.php';

// Récupérer l'ID depuis l'URL
$id = (int)$_GET['id'];

// Supprimer le livre
$sql = "DELETE FROM articles WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);

// Rediriger vers la liste
header('Location: articles.php');
exit;
=======
<?php
// Connexion à MySQL
require 'config.php';

// Récupérer l'ID depuis l'URL
$id = (int)$_GET['id'];

// Supprimer le livre
$sql = "DELETE FROM articles WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);

// Rediriger vers la liste
header('Location: articles.php');
exit;
>>>>>>> 2daa20932202cf201b7f591f3eaccf37c81e3281
?>