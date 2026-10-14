<?php 
$page_active = "cart"
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon panier — NovaBooks</title>
    <script src="panier.js" defer></script>
    <script src="cart.js" defer></script>
    <link rel="stylesheet" href="cart.css">
</head>
<body>

<?php require 'part/header.php'?>

<!-- ===== PANIER ===== -->
<section class="mon-panier">
    <h2>Mon panier</h2>

    <!-- Les articles (remplis par cart.js) -->
    <div id="liste-panier"></div>

    <!--  AJOUT 1 : RÉCAP + BOUTON -->
    <div id="recapitulatif" class="recapitulatif" style="display: none;">
        <h2>Récapitulatif</h2>

        <div class="recap-ligne">
            <span>Sous-total</span>
            <span id="sous-total">0 FCFA</span>
        </div>

        <div class="recap-ligne">
            <span>Livraison</span>
            <span id="livraison">2 000 FCFA</span>
        </div>

        <div class="recap-ligne recap-total">
            <span>Total</span>
            <span id="total">0 FCFA</span>
        </div>

        <button class="btn-primaire" onclick="allerAuCheckout()">
            Passer commande →
        </button>

        <a href="products.html" class="btn-secondaire">
            ← Continuer mes achats
        </a>
    </div>
</section>

<!-- ✅ AJOUT 2 : SCRIPT DE PROTECTION -->
<script>
function allerAuCheckout() {
    const currentUser = JSON.parse(localStorage.getItem('currentUser'));

    if (!currentUser) {
        localStorage.setItem('redirectAfterLogin', 'checkout.html');
        alert('⚠️ Connectez-vous pour passer commande');
        window.location.href = 'contact.html';
        return;
    }

    window.location.href = 'checkout.html';
}
</script>

</body>
</html>