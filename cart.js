// En haut de cart.js
const recapitulatif = document.querySelector("#recapitulatif");
const liste = document.querySelector("#liste-panier");

let monPanier = JSON.parse(localStorage.getItem("panier")) || [];

if (monPanier.length === 0) {

    // === PANIER VIDE ===
    liste.innerHTML = `<p style="text-align:center;padding:20px;">Votre panier est vide 🛒</p>`;
    
    // ❌ Cacher le récap
    if (recapitulatif) recapitulatif.style.display = "none";

} else {

    // === PANIER AVEC ARTICLES ===
    let total = 0;
    let html = "";

    monPanier.forEach(function(livre) {
        let prix = parseFloat(livre.prix.replace(/[^\d.,]/g, '').replace(',', '.'));
        total += prix * livre.quantité;

        html += `<div class="item-panier">
                    <img src="${livre.image}">
                    <h3>${livre.nom}</h3>
                    <p>${livre.auteur}</p>
                    <p>${livre.format}</p>
                    <p>${livre.pages}</p>
                    <p>${prix * livre.quantité}</p>
                    <div class="quantity">
                        <button class="btn-moins" data-nom="${livre.nom}">-</button>
                        <span>${livre.quantité}</span>
                        <button class="btn-plus" data-nom="${livre.nom}">+</button>
                    </div>
                    <button class="btn-sup" data-nom="${livre.nom}">Supprimer</button>
                 </div>`;
    });

    liste.innerHTML = html;

    // ✅ Afficher le récap
    if (recapitulatif) {
        recapitulatif.style.display = "block";

        document.querySelector("#sous-total").textContent = total.toLocaleString('fr-FR') + " FCFA";
        document.querySelector("#livraison").textContent = "2 000 FCFA";
        document.querySelector("#total").textContent = (total + 2000).toLocaleString('fr-FR') + " FCFA";
    }

    // Boutons + / - / supprimer
    document.querySelectorAll(".btn-plus").forEach(function(bouton) {
        bouton.addEventListener("click", function() {
            const nom = bouton.getAttribute("data-nom");
            const article = monPanier.find(a => a.nom === nom);
            article.quantité += 1;
            localStorage.setItem("panier", JSON.stringify(monPanier));
            location.reload();
        });
    });

    document.querySelectorAll(".btn-moins").forEach(function(bouton) {
        bouton.addEventListener("click", function() {
            const nom = bouton.getAttribute("data-nom");
            const article = monPanier.find(a => a.nom === nom);
            if (article.quantité > 1) article.quantité -= 1;
            localStorage.setItem("panier", JSON.stringify(monPanier));
            location.reload();
        });
    });

    //ajout au panier
    document.querySelectorAll(".btn-sup").forEach(function(bouton) {
        bouton.addEventListener("click", function() {
            const nom = bouton.getAttribute("data-nom");
            monPanier = monPanier.filter(a => a.nom !== nom);
            localStorage.setItem("panier", JSON.stringify(monPanier));
            location.reload();
        });
    });
}