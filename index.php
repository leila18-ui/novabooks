<?php 
$page_active = "index" ;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NovaBooks — Votre librairie en ligne</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="part/header.css">
    <script src="panier.js" defer></script>
    <script src="cart.js" defer></script>
</head>

<body>

<?php require 'part/header.php'?>


<main>

    <!-- ===== HERO ===== -->
    <section class="partie2">
        <p>Votre librairie en ligne</p>
        <h1>Plongez dans des <br>histoires <strong>intenses</strong></h1>
        <p>Romance, Dark Romance, Fantasy, Thriller...</p>
        <p>Trouvez le livre qui fera battre votre cœur</p>

        <a href="products.php"><h5>Découvrir la boutique</h5></a>
    </section>

    <!-- ===== COUPS DE CŒUR ===== -->
    <div class="exclu">
        <h5>Nos coups de cœur</h5>
        <h3>Les plus populaires</h3>
    </div>

    <section class="image">

        <div class="livre">
            <img src="image/téléchargement (10).jpeg" alt="Captive — Sarah Rivens">
            <p><strong>Shattered vows</strong><br>de Shain Rose</p>
            <span>11 500 FCFA</span>
            <h3><a href="product.php#shatvows" class="plus">Voir plus</a></h3>
        </div>

        <div class="livre">
            <img src="image/Home - Ali Hazelwood.jpeg" alt="Leonid Petrov — Nanou AD">
            <p><strong>The loove hypothesis</strong><br> Ali Hazelwood</p>
            <span>13 500 FCFA</span>
            <h3><a href="product.php#leonid" class="plus">Voir plus</a></h3>
        </div>

        <div class="livre">
            <img src="image/Uncovering Rose_ Special Edition Cover - A Curvy Girl Mafia Second Chance Romance (The Sinful Secrets Series).jpeg" alt="Uncovering Rose — Sinful Secrets">
            <p><strong>Uncovering Rose</strong><br>Annie charm</p>
            <span>12 000 FCFA</span>
            <h3><a href="product.php#uncovering" class="plus">Voir plus</a></h3>
        </div>

        <div class="livre">
            <img src="image/birth.jpeg" alt="Birthday Girl — Penelope Douglas">
            <p><strong>Birthday Girl</strong><br>de Penelope Douglas</p>
            <span>13 500 FCFA</span>
            <h3><a href="product.php#birthday" class="plus">Voir plus</a></h3>
        </div>

        <div class="livre">
            <img src="image/Mad Majesty.jpeg" alt="Mad Majesty — Sarah Rivens">
            <p><strong>Mad Majesty</strong><br>Delinda  Dane</p>
            <span>13 500 FCFA</span>
            <h3><a href="product.php#madmajesty" class="plus">Voir plus</a></h3>
        </div>

        <div class="livre">
            <img src="image/Wild Love NA.jpeg" alt="Wild Love — Elsie Silver">
            <p><strong>Wild Love</strong><br>d'Elsie Silver</p>
            <span>13 500 FCFA</span>
            <h3><a href="product.php#wildlove" class="plus">Voir plus</a></h3>
        </div>

        <div class="livre">
            <img src="image/The Wrong Bride _ Maura, Catharina, Jaubert, Agnès_ Amazon_fr_ Livres.jpeg" alt="The Wrong Bride — Catharina Maura">
            <p><strong>The Wrong Bride</strong><br>de Catharina Maura</p>
            <span>13 500 FCFA</span>
            <h3><a href="product.php#wrongbride" class="plus">Voir plus</a></h3>
        </div>

        <div class="livre">
            <img src="image/THR4" alt="Throttled — Lauren Asher">
            <p><strong>Throttled</strong><br>de Lauren Asher</p>
            <span>13 500 FCFA</span>
            <h3><a href="product.php#throttled" class="plus">Voir plus</a></h3>
        </div>

        <div class="livre">
            <img src="image/FANTA2.jpeg" alt="Hexed — Emily McIntire">
            <p><strong>Hexed</strong><br>d'Emily McIntire</p>
            <span>13 500 FCFA</span>
            <h3><a href="product.php#hexed" class="plus">Voir plus</a></h3>
        </div>

    </section>

    <!-- ===== AVIS CLIENTS ===== -->
    <section class="avis-clients">
        <div class="avis-header">
            <h3>Avis de nos clients</h3>
            <p>Découvrez ce que nos lecteurs pensent de leurs achats</p>
        </div>

        <div class="avis-container">
            <div class="avis-card">
                <div class="stars">★★★★★</div>
                <p class="avis-texte">"J'ai adoré Captive ! Un vrai page-turner qui m'a tenue éveillée jusqu'à 3h du matin. Livraison rapide en plus !"</p>
                <p class="avis-auteur">- Ama K.</p>
            </div>

            <div class="avis-card">
                <div class="stars">★★★★★</div>
                <p class="avis-texte">"Leonid Petrov est intense et captivant. Exactement ce que je cherchais. NovaBooks a une super sélection !"</p>
                <p class="avis-auteur">- Marie T.</p>
            </div>

            <div class="avis-card">
                <div class="stars">★★★★☆</div>
                <p class="avis-texte">"Bon site, bonne qualité de livres. Le service client m'a aidée rapidement. Je recommande !"</p>
                <p class="avis-auteur">- Fatima B.</p>
            </div>

            <div class="avis-card">
                <div class="stars">★★★★★</div>
                <p class="avis-texte">"Birthday Girl m'a complètement surprise. Merci NovaBooks pour cette découverte ! Emballage soigné."</p>
                <p class="avis-auteur">- Sarah D.</p>
            </div>
        </div>
    </section>

</main>

<footer>

    <section class="service">
        <div class="footer1">
            <p>Service de livraison rapide</p>
            <h6>Partout en Côte d'Ivoire</h6>
        </div>

        <div class="footer1">
            <p>Paiement sécurisé</p>
            <h6>Vos données sont protégées</h6>
        </div>

        <div class="footer2">
            <p>Idée cadeaux</p>
            <h6>Offrez un livre, offrez une émotion</h6>
        </div>

        <div class="footer3">
            <p>Un service client à votre écoute</p>
            <h6>Une question ? Nous sommes là !</h6>
        </div>
    </section>
    <!-- Bouton Service client WhatsApp -->
<a href="https://wa.me/2250700002213?text=Bonjour%2C%20j%27ai%20une%20question"
   target="_blank"
   rel="noopener noreferrer"
   class="service-client"
   aria-label="Contacter le service client sur WhatsApp">
    <span class="service-icon" aria-hidden="true">💬</span>
    <span class="service-texte">Service client</span>
</a>

    <p>Parce que chaque livre est une nouvelle aventure</p>
    <p>2026 NovaBooks. Tous droits réservés.</p>
    
</footer>

</body>
</html>