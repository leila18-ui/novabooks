<header class="partie1">
    <div class="brand">
        <h2><a href="index.php">NovaBooks</a></h2>
        <h5>Des histoires qui restent</h5>
    </div>

    <nav>
        <ul>
            <li class="<?= $page_active === 'accueil' ? 'active' : '' ?>">
                <a href="index.php">Accueil</a>
            </li>
            <li class="<?= $page_active === 'about' ? 'active' : '' ?>">
            <a href="about.php">À propos</a>
            </li>
            <li class="<?= $page_active === 'products' ? 'active' : '' ?>">
                <a href="products.php">Catalogue</a>
            </li>
            <li class="<?= $page_active === 'checkout' ? 'active' : '' ?>">
                <a href="checkout.php">Checkout</a>
            </li>
            <li class="panier">
                <a href="cart.php">🛒<span id="icon-panier"></span></a>
            </li>
        </ul>
    </nav>
</header>