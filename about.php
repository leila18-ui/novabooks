<?php 
$page_active = "about";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À Propos - NovaBooks</title>
    <script src="panier.js" defer></script>
    <link rel="stylesheet" href="part/header.css">
    <link rel="stylesheet" href="about.css">
</head>
<body>

      <?php require 'part/header.php';?>

    <main>

        <!-- HEADER -->
        <section class="about-header">
            <h1>À propos de NovaBooks</h1>
            <p>Votre destination pour les histoires qui bouleversent</p>
        </section>

        <!-- QUI SOMMES-NOUS -->
        <section class="presentation">
            <div class="presentation-image">
                <img src="image/Charleston Bookstore (King Street).jpeg" alt="Librairie NovaBooks">
            </div>
    
            <div class="presentation-texte">
                <h2>Qui sommes-nous ?</h2>
                <p>NovaBooks est une librairie en ligne née de la passion pour les histoires intenses et captivantes. Nous croyons que chaque livre est une porte vers un nouvel univers, une aventure qui change celui qui la vit.</p>
                <p>Fondée en 2024, NovaBooks s'est donné pour mission de rendre accessible les romans les plus captivants du moment : Dark Romance, Thriller psychologique, Fantasy épique... Nous sélectionnons minutieusement chaque titre pour vous garantir une expérience de lecture inoubliable.</p>
                <p>Basée en Côte d'Ivoire, nous servons des lecteurs passionnés partout dans le pays, avec livraison rapide et sécurisée.</p>
            </div>
        </section>

        <!-- NOTRE MISSION -->
        <section class="mission">
            <div class="mission-texte">
                <h2>🎯 Notre Mission</h2>
                <p>Rendre les histoires intenses et captivantes accessibles à tous les lecteurs passionnés de Côte d'Ivoire.</p>
                <p>Nous nous engageons à :</p>
                <ul class="mission-list">
                    <li>✓ Proposer une sélection rigoureuse de livres de qualité</li>
                    <li>✓ Offrir une livraison rapide et fiable partout en Côte d'Ivoire</li>
                    <li>✓ Garantir une expérience d'achat sécurisée et fluide</li>
                    <li>✓ Créer une communauté de lecteurs passionnés</li>
                </ul>
            </div>

            <div class="mission-image">
                <img src="image/mission.jpeg" alt="Notre mission">
            </div>
        </section>
    
        <!-- NOS VALEURS -->
        
        <section class="valeurs">
            <h2>Nos Valeurs</h2>
            <div class="valeurs-container">
                <div class="valeur-card">
                    <div class="valeur-icon">📚</div>
                    <h3>Passion</h3>
                    <p>Nous aimons les livres et la lecture. C'est notre passion qui vous guide vers les meilleures histoires.</p>
                </div>

                <div class="valeur-card">
                    <div class="valeur-icon">⭐</div>
                    <h3>Qualité</h3>
                    <p>Chaque livre est sélectionné avec soin pour garantir une expérience de lecture exceptionnelle.</p>
                </div>

                <div class="valeur-card">
                    <div class="valeur-icon">🤝</div>
                    <h3>Confiance</h3>
                    <p>Vos données sont protégées et votre satisfaction est notre priorité absolue.</p>
                </div>
        </section>

        <!-- POURQUOI NOUS CHOISIR -->
        <section class="pourquoi">
            <h2>Pourquoi choisir NovaBooks ?</h2>
            <div class="pourquoi-container">
                <div class="pourquoi-item">
                    <h3>📦 Livraison Rapide</h3>
                    <p>Livraison en 24-48h partout en Côte d'Ivoire. Vos livres vous attendent !</p>
                </div>

                <div class="pourquoi-item">
                    <h3>💳 Paiement Sécurisé</h3>
                    <p>Vos transactions sont protégées par les meilleures normes de sécurité.</p>
                </div>

                <div class="pourquoi-item">
                    <h3>💬 Support Client</h3>
                    <p>Une équipe à votre écoute pour répondre à toutes vos questions.</p>
                </div>

                <div class="pourquoi-item">
                    <h3>🎁 Emballage Soigné</h3>
                    <p>Vos livres arrivent en parfait état, idéal pour un cadeau.</p>
                </div>

                <div class="pourquoi-item">
                    <h3>📖 Sélection Curatée</h3>
                    <p>Nos experts sélectionnent les meilleurs titres pour vous.</p>
                </div>

                <div class="pourquoi-item">
                    <h3> Programme Fidélité</h3>
                    <p>Gagnez des points à chaque achat et profitez de réductions exclusives.</p>
                </div>

            </div>
        </section>

        <!-- STATISTIQUES -->
        <section class="stats">
            <div class="stat-card">
                <h3>500+</h3>
                <p>Titres disponibles</p>
            </div>

            <div class="stat-card">
                <h3>3000+</h3>
                <p>Clients satisfaits</p>
            </div>

            <div class="stat-card">
                <h3>48h</h3>
                <p>Livraison moyenne</p>
            </div>

            <div class="stat-card">
                <h3>⭐ 4.9/5</h3>
                <p>Note moyenne clients</p>
            </div>
        </section>

        <!-- CTA FINAL -->
        <section class="cta-section">
            <h2>Prêt à découvrir votre prochain coup de cœur ?</h2>
            <p>Explorez notre sélection exclusive de livres captivants</p>
            <a href="products.php" class="cta-button">Découvrir la boutique</a>
        </section>

    </main>

    <footer class="footer">
        <h3>NovaBooks</h3> 
        <p>Votre univers littéraire à portée de clic.</p> 
        <p>2026 Nova Books - Tous droits réservés</p>
    </footer>

</body>
</html>