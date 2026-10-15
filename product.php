<?php
$page_active = "product" ;
// connexion à la BD 
require 'admin/config.php';
// vérifie l'existence l'id depus l'URL et s'il exite on récupère la valeurs qu'on transforme en nombre entier 
$id = isset ($_GET['id']) ? (int)$_GET['id'] : 1;
$sql = "SELECT * FROM articles WHERE id = ? ";
// Prepare la requete pour éviter l'injection SQL 
$stmt = $pdo->prepare($sql);
// exécuter la requete en remplissant le ? par l'id correspondant 
$stmt ->execute([$id]);
$livre = $stmt->fetch();

if (!$livre){
    header('Location: products.php' );
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($livre['titre'])?>-Novabooks </title>
    <script src="panier.js" defer></script>
    <script src="product.js" defer></script>
    <link rel="stylesheet" href="product.css">
    <link rel="stylesheet" href="part/header.css">
    </head>
<body>

<?php require 'part/header.php'?>

<main>
    <section class="product-page" style="display:block;">
        <section class="product">
            <div class="product-image">
                <img src="<?= htmlspecialchars($livre['image'])?>" alt="<?= htmlspecialchars($livre['titre'])?>">
            </div>
        
            <div class="product-info">
                <h1><?= htmlspecialchars($livre['titre'])?></h1>
                <p class="author">Par : <?= htmlspecialchars($livre['auteur'])?></p>
                <p class="price"> <?=number_format($livre['prix'],0,',','')?></p>
                <p class="description"> <?= htmlspecialchars($livre['description'])?></p>
                <button class="add-cart">Ajouter au panier</button>
            </div>

        </section>
        <section class="details">
            <h2>Description</h2>
            <h1><?= htmlspecialchars($livre['titre'])?></h1>
            </section>
            <section class="book-info">
            <h2>Informaton sur le livre </h2>
            <p><strong>Auteur </strong> <?= htmlspecialchars($livre['auteur'])?></p>
            <p><strong>Catégories </strong> <?= htmlspecialchars($livre['catégorie'])?></p>
            <p><strong>Langue :</strong>Francais</p>
            <p><strong>Format :</strong>Broché</p>
            <p class="price"> <?=number_format($livre['prix'],0,',','')?></p>
            <p class="description"> <?= htmlspecialchars($livre['description'])?></p>
            </section>
        
    </section>
</main>