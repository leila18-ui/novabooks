<<<<<<< HEAD
<?php 
$page_active = "articles";
require 'partials/sidebar.php';
require 'config.php';
$sql = "SELECT * FROM articles ORDER BY date_ajout DESC";
$stmt = $pdo ->query($sql);
$articles = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <script src="https://unpkg.com/lucide@latest"></script>
    <title>Document</title>
</head>

<body>
    <main class="contenu">

    <header class="tete-admin">
        <div class="recherche">
            <i data-lucide="search"></i>
            <input type="text" placeholder="Rechercher un article...">
        </div>
        <div class="notif-compte">
            <div class="notif">
                <i data-lucide="bell"></i>
            </div>
            <div class="compte">
                <h2>Admin</h2>
                <i data-lucide="chevron-down"></i>
            </div>
        </div>
    </header>

    <section class="bienvenue">
        <div class="bienvenue-gauche">
            <h1>Mes articles</h1>
            <p>Total : <?= count($articles) ?> livres en stock.</p>
        </div>
        <div class="bienvenue-droite">
            <a href="ajouter-articles.php" class="btn-ajouter">
                <i data-lucide="plus"></i> Ajouter un article
            </a>
        </div>
    </section>

    <section class="liste-articles">
        <table class="tableau-articles">
      <thead>
       <tr>
        <th>Image</th>
        <th>Titre</th>
        <th>Auteur</th>
        <th>Prix</th>
        <th>Catégorie</th>
        <th>Stock</th>
        <th>Actions</th>
      </tr>
     </thead>
            <tbody>
                <?php foreach ($articles as $article): ?>
                   <tr>
                      <td><img src="../<?= $article['image'] ?>" alt="" width="40"></td>
                      <td><?= $article['titre'] ?></td>
                      <td><?= $article['auteur'] ?></td>
                      <td><?= $article['prix'] ?> FCFA</td>
                      <td><?= $article['categorie'] ?></td>
                      <td><?= $article['stock'] ?></td>
                <td>
        <a href="articles-modifier.php?id=<?= $article['id'] ?>" class="btn-modifier">Modifier</a>
        <a href="articles-supprimer.php?id=<?= $article['id'] ?>" class="btn-supprimer" onclick="return confirm('Supprimer ce livre ?')">Supprimer</a>
               </td>
</tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>

</main>

    <script>
       lucide.createIcons();
    </script>

</body>
=======
<?php 
$page_active = "articles";
require 'partials/sidebar.php';
require 'config.php';
$sql = "SELECT * FROM articles ORDER BY date_ajout DESC";
$stmt = $pdo->query($sql);
$articles = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <script src="https://unpkg.com/lucide@latest"></script>
    <title>Document</title>
</head>

<body>
    <main class="contenu">

    <header class="tete-admin">
        <div class="recherche">
            <i data-lucide="search"></i>
            <input type="text" placeholder="Rechercher un article...">
        </div>
        <div class="notif-compte">
            <div class="notif">
                <i data-lucide="bell"></i>
            </div>
            <div class="compte">
                <h2>Admin</h2>
                <i data-lucide="chevron-down"></i>
            </div>
        </div>
    </header>

    <section class="bienvenue">
        <div class="bienvenue-gauche">
            <h1>Mes articles</h1>
            <p>Total : <?= count($articles) ?> livres en stock.</p>
        </div>
        <div class="bienvenue-droite">
            <a href="ajouter-articles.php" class="btn-ajouter">
                <i data-lucide="plus"></i> Ajouter un article
            </a>
        </div>
    </section>

    <section class="liste-articles">
        <table class="tableau-articles">
      <thead>
       <tr>
        <th>Image</th>
        <th>Titre</th>
        <th>Auteur</th>
        <th>Prix</th>
        <th>Catégorie</th>
        <th>Stock</th>
        <th>Actions</th>
      </tr>
     </thead>
            <tbody>
                <?php foreach ($articles as $article): ?>
                   <tr>
                      <td><img src="../<?= $article['image'] ?>" alt="" width="40"></td>
                      <td><?= $article['titre'] ?></td>
                      <td><?= $article['auteur'] ?></td>
                      <td><?= $article['prix'] ?> FCFA</td>
                      <td><?= $article['categorie'] ?></td>
                      <td><?= $article['stock'] ?></td>
                <td>
        <a href="articles-modifier.php?id=<?= $article['id'] ?>" class="btn-modifier">Modifier</a>
        <a href="articles-supprimer.php?id=<?= $article['id'] ?>" class="btn-supprimer" onclick="return confirm('Supprimer ce livre ?')">Supprimer</a>
               </td>
</tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>

</main>

    <script>
       lucide.createIcons();
    </script>

</body>
>>>>>>> 2daa20932202cf201b7f591f3eaccf37c81e3281
</html>