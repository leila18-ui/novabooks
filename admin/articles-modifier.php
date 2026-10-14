<?php
$page_active = "articles";
require 'partials/sidebar.php';
require 'config.php';

// Récupérer l'ID du livre depuis l'URL
$id = $_GET['id'];

// Récupérer le livre correspondant
$sql = "SELECT * FROM articles WHERE id = ?";
$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);
$article = $stmt->fetch();

// Si le livre n'existe pas
if (!$article) {
    header('Location: articles.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <script src="https://unpkg.com/lucide@latest"></script>
    <title>Modifier un article - Admin</title>
</head>
<body>
    <main class="contenu">
        <h1>Modifier : <?= $article['titre'] ?></h1>

        <form action="articles-modifier-traitement.php" method="POST" class="form-ajout">

            <input type="hidden" name="id" value="<?= $article['id'] ?>">

            <label for="titre">Titre</label>
            <input type="text" id="titre" name="titre" value="<?= $article['titre'] ?>" required>

            <label for="auteur">Auteur</label>
            <input type="text" id="auteur" name="auteur" value="<?= $article['auteur'] ?>" required>

            <label for="prix">Prix (FCFA)</label>
            <input type="number" id="prix" name="prix" value="<?= $article['prix'] ?>" required>

            <label for="categorie">Catégorie</label>
            <input type="text" id="categorie" name="categorie" value="<?= $article['categorie'] ?>" required>

            <label for="image">Chemin de l'image</label>
            <input type="text" id="image" name="image" value="<?= $article['image'] ?>">

            <label for="description">Description</label>
            <textarea id="description" name="description" rows="4"><?= $article['description'] ?></textarea>

            <label for="stock">Stock</label>
            <input type="number" id="stock" name="stock" value="<?= $article['stock'] ?>" required>

            <button type="submit" class="btn-valider">Enregistrer les modifications</button>

        </form>
    </main>
    <script>lucide.createIcons();</script>
</body>
</html>