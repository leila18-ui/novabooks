
    <aside class="sidebar">
        <nav>
            <h2> Novabooks</h2>
            <ul>
                <li class="<?= $page_active === 'dashboard' ? 'active' : '' ?>">
                    <a href="admin.php">
                    <i data-lucide="house"></i>Tableau de bord
                    </a>
                </li>

                <li class="<?= $page_active === 'articles' ? 'active' : '' ?>">
                    <a href="articles.php">
                    <i data-lucide="package"></i>Articles
                    </a>
                </li>

                <li class="<?= $page_active === 'commandes' ? 'active' : '' ?>">
                    <a href="commandes.php">
                    <i data-lucide="shopping-cart"></i>Commandes
                    </a>
                </li>

               <li class="<?= $page_active === 'utilisateurs' ? 'active' : '' ?>"> 
                     <a href="utilisateurs.php">
                     <i data-lucide="users"></i>Utilisateurs
                     </a>
                </li>

                 <li class="<?= $page_active === 'categories' ? 'active' : '' ?>">
                    <a href="categories.php">
                    <i data-lucide="tag"></i>Catégories
                    </a>
                </li>

                 <li class="<?= $page_active === 'parametres' ? 'active' : '' ?>">
                    <a href="parametres.php">
                    <i data-lucide="settings"></i>Paramètres
                    </a>
                </li>

                <li class="deconnexion"><i data-lucide="log-out"></i>Déconnexion</li>

            </ul>
        </nav>
    </aside>