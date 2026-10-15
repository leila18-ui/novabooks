<?php 
$page_active = "product" ;
// connexion à la BD 
require 'config.php';
// vérifie l'existence l'id depus l'URL et s'il exite on récupère la valeurs qu'on transforme en nombre entier 
$id = isset ($_GET['id']) ? (int)$_GET['id'] : 1;
$sql = "SELECT * FROM articles WHERE id = ? ";
// Prepare la requete pour éviter l'injection SQL 
$stmt = $pdo->prepare($sql);
// exécuter la requete en remplissant le ? par l'id correspondant 
$stmt = $stmt->execute([$id]);
$livre = $stmt->fetch()

if (!$livre){
    header('Location: products.php' );
    exit();
}
