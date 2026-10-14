
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/lucide@latest"></script>
    <link rel="stylesheet" href="admin.css">
    <title>PAGE ADMIN</title>
</head>
<body>

<?php
    $page_active= "dashboard";
    require 'partials/sidebar.php';
?>


    <main class="contenu">

    <header class="tete-admin">

        <div class="recherche">
            <i data-lucide="search"></i>
            <input type="text" placeholder="Rechercher...">
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
        <h1>Bonjour Admin </h1>
        <p>Voici un aperçu de votre boutique aujourd'hui.</p>
    </div>
    
    <div class="bienvenue-droite">
        <span>Samedi 27 septembre 2025</span>
    </div>
    
</section>



    <section class="cartes">
    
    <!-- Carte 1 : Commandes -->
    <div class="carte">
        <div class="icon">
            <i data-lucide="shopping-cart"></i>
        </div>
        <div class="carte-contenu">
            <p class="carte-titre">Commandes</p>
            <h3 class="carte-chiffre">12</h3>
            <p class="carte-sous-titre">↗ +20% par rapport à hier</p>
        </div>
    </div>

    <!-- Carte 2 : Produits -->
    <div class="carte">
        <div class="icon">
            <i data-lucide="package"></i>
        </div>
        <div class="carte-contenu">
            <p class="carte-titre">Produits</p>
            <h3 class="carte-chiffre">48</h3>
            <p class="carte-sous-titre">↗ +5% au total</p>
        </div>
    </div>

    <!-- Carte 3 : Utilisateurs -->
    <div class="carte">
        <div class="icon">
            <i data-lucide="users"></i>
        </div>
        <div class="carte-contenu">
            <p class="carte-titre">Utilisateurs</p>
            <h3 class="carte-chiffre">26</h3>
            <p class="carte-sous-titre">↗ +12% inscrits</p>
        </div>
    </div>

    <!-- Carte 4 : Revenus -->
    <div class="carte">
        <div class="icon">
            <i data-lucide="euro"></i>
        </div>
        <div class="carte-contenu">
            <p class="carte-titre">Revenus</p>
            <h3 class="carte-chiffre">342 000 FCFA</h3>
            <p class="carte-sous-titre">↗ +18% aujourd'hui</p>
        </div>
    </div>

    

</section>


<section class="dernieres-commandes">
    
    <div class="section-entete">
        <h3>Dernières commandes</h3>
        <a href="#">Voir tout ></a>
    </div>

    <table class="tableau-commandes">
        <thead>
            <tr>
                <th>N° commande</th>
                <th>Client</th>
                <th>Date</th>
                <th>Montant</th>
                <th>Statut</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>#SHB-0048</td>
                <td>A. Koné</td>
                <td>27/09/2025</td>
                <td>28 000 FCFA</td>
                <td><span class="statut en-cours">En cours</span></td>
            </tr>
            <tr>
                <td>#SHB-0047</td>
                <td>M. Diallo</td>
                <td>26/09/2025</td>
                <td>19 500 FCFA</td>
                <td><span class="statut payee">Payée</span></td>
            </tr>
            <tr>
                <td>#SHB-0046</td>
                <td>K. Bamba</td>
                <td>25/09/2025</td>
                <td>32 000 FCFA</td>
                <td><span class="statut payee">Payée</span></td>
            </tr>
            <tr>
                <td>#SHB-0045</td>
                <td>S. Coulibaly</td>
                <td>24/09/2025</td>
                <td>21 000 FCFA</td>
                <td><span class="statut en-cours">En cours</span></td>
            </tr>
            <tr>
                <td>#SHB-0044</td>
                <td>L. Diabaté</td>
                <td>23/09/2025</td>
                <td>42 000 FCFA</td>
                <td><span class="statut livree">Livrée</span></td>
            </tr>
        </tbody>
    </table>

</section>


</main>

<section class="ajout">

</section>









    <script>
        lucide.createIcons();
    </script>
</body>
</html>
