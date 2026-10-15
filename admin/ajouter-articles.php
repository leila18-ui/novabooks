<<<<<<< HEAD
<?php
$page_active = "articles";
require 'partials/sidebar.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <script src="https://unpkg.com/lucide@latest"></script>
    <title>Ajouter un article - Admin</title>
</head>
<body>
    <main class="contenu">
        <h1>Ajouter un article</h1>
        
        <form action="ajouter-articles-traitement.php" method="POST" class="form-ajout">
            
            <label for="titre">Titre</label>
            <input type="text" id="titre" name="titre" required>
            
            <label for="auteur">Auteur</label>
            <input type="text" id="auteur" name="auteur" required>
            
            <label for="prix">Prix (FCFA)</label>
            <input type="number" id="prix" name="prix" required>
            
            <label for="categorie">Catégorie</label>
            <input type="text" id="categorie" name="categorie" required>
            
            <label for="image">Chemin de l'image</label>
            <input type="text" id="image" name="image" placeholder="image/monlivre.jpeg">
            
            <label for="description">Description</label>
            <textarea id="description" name="description" rows="4"></textarea>
            
            <label for="stock">Stock</label>
            <input type="number" id="stock" name="stock" value="10" required>
            
            <button type="submit" class="btn-valider">Ajouter l'article</button>
            
        </form>
        
    </main>
    <script>lucide.createIcons();</script>
</body>
=======
<?php
$page_active = "articles";
require 'partials/sidebar.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <script src="https://unpkg.com/lucide@latest"></script>
    <title>Ajouter un article - Admin</title>
</head>
<body>
    <main class="contenu">
        <h1>Ajouter un article</h1>
        
        <form action="ajouter-articles-traitement.php" method="POST" class="form-ajout">
            
            <label for="titre">Titre</label>
            <input type="text" id="titre" name="titre" required>
            
            <label for="auteur">Auteur</label>
            <input type="text" id="auteur" name="auteur" required>
            
            <label for="prix">Prix (FCFA)</label>
            <input type="number" id="prix" name="prix" required>
            
            <label for="categorie">Catégorie</label>
            <input type="text" id="categorie" name="categorie" required>
            
            <label for="image">Chemin de l'image</label>
            <input type="text" id="image" name="image" placeholder="image/monlivre.jpeg">
            
            <label for="description">Description</label>
            <textarea id="description" name="description" rows="4"></textarea>
            
            <label for="stock">Stock</label>
            <input type="number" id="stock" name="stock" value="10" required>
            
            <button type="submit" class="btn-valider">Ajouter l'article</button>
            
        </form>
        
    </main>
    <script>lucide.createIcons();</script>
</body>
>>>>>>> 2daa20932202cf201b7f591f3eaccf37c81e3281
</html>