<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion — NovaBooks</title>
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" href="part/header.css">
    <script src="contact.js" defer></script>
</head>
<body>

    <?php require 'part/header.php'?>

<form action="" method="post" class="login-form">

    <h2 class="login-title">Connexion</h2>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="exemple@mail.com" required>
    </div>

    <div class="form-group">
        <label for="password">Mot de passe</label>
        <input type="password" id="password" name="password" placeholder="••••••••" required>
    </div>

    <div class="souvenir">
        <label>
            <input type="checkbox" name="souvenir">
            <span>Se souvenir de moi</span>
        </label>
    </div>

    <div class="connexion">
        <button type="submit">Se connecter</button>
    </div>

    <div class="liens">
        <a href="#" class="mdp">Mot de passe oublié ?</a>
        <a href="#" class="comp">Créer un compte</a>
    </div>

</form>

<script src="contact.js"></script>
</body>
</html>