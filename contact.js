// ===== GESTION DES UTILISATEURS (localStorage) =====

function getUsers() {
    return JSON.parse(localStorage.getItem('users')) || [];
}

function saveUsers(users) {
    localStorage.setItem('users', JSON.stringify(users));
}

function getCurrentUser() {
    return JSON.parse(localStorage.getItem('currentUser'));
}

function saveCurrentUser(email) {
    localStorage.setItem('currentUser', JSON.stringify({ email, loginTime: new Date() }));
}

// ===== RÉCUPÉRATION DES ÉLÉMENTS HTML =====

const form = document.querySelector('form');
<<<<<<< HEAD
=======
const inputEmail = form ? form.querySelector('input[name="email"]') : null;
const inputPassword = form ? form.querySelector('input[name="password"]') : null;
const checkboxRemember = form ? form.querySelector('input[name="souvenir"]') : null;
const linkCreateAccount = document.querySelector('a.comp');
const linkForgotPassword = document.querySelector('a.mdp');
>>>>>>> 2daa20932202cf201b7f591f3eaccf37c81e3281

// ===== FONCTIONS D'AUTHENTIFICATION =====

function register(email, password, passwordConfirm) {
    if (!email || !password || !passwordConfirm) {
        alert('❌ Tous les champs sont obligatoires');
        return false;
    }

    if (password !== passwordConfirm) {
        alert('❌ Les mots de passe ne correspondent pas');
        return false;
    }

    if (password.length < 4) {
        alert('❌ Le mot de passe doit faire au moins 4 caractères');
        return false;
    }

    const users = getUsers();
    if (users.find(u => u.email === email)) {
        alert('❌ Cet email est déjà utilisé');
        return false;
    }

    users.push({ email, password });
    saveUsers(users);

    alert('✅ Inscription réussie ! Connectez-vous maintenant.');
<<<<<<< HEAD

=======
    
   // Vider les champs et revenir au login
>>>>>>> 2daa20932202cf201b7f591f3eaccf37c81e3281
    if (form) {
        form.reset();
    }
    switchToLogin();

    return true;
}

function login(email, password, remember) {
    if (!email || !password) {
        alert('❌ Veuillez remplir tous les champs');
        return false;
    }

    const users = getUsers();
    const user = users.find(u => u.email === email && u.password === password);

    if (!user) {
        alert('❌ Email ou mot de passe incorrect');
        return false;
    }

    saveCurrentUser(email);

    if (remember) {
        localStorage.setItem('rememberMe', 'true');
    }

    alert('✅ Connexion réussie !');

    // Récupérer la page demandée avant la connexion
    const redirect = localStorage.getItem('redirectAfterLogin') || 'index.php';
    localStorage.removeItem('redirectAfterLogin');

    setTimeout(function() {
        window.location.href = redirect;
    }, 500);

    return true;
}

// ===== BASCULER ENTRE LOGIN ET REGISTER =====

function switchToLogin() {
<<<<<<< HEAD
    if (!form) return;

    form.innerHTML = `
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
=======
    if (form) {
        form.innerHTML = `
            <h2>Connexion</h2>
            <h2>mail</h2>
            <input type="text" name="email" placeholder=" example@gmail.com  "> <br>
            <h2>mot de passe</h2>
            <input type="password" name="password" placeholder=" 0000 "> <br>
            
            <div class="souvenir">
>>>>>>> 2daa20932202cf201b7f591f3eaccf37c81e3281
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
    `;

    attachLoginEvents();
}

function switchToRegister() {
    if (!form) return;

    form.innerHTML = `
        <h2 class="login-title">Créer un compte</h2>

        <div class="form-group">
            <label for="reg-email">Email</label>
            <input type="email" id="reg-email" placeholder="Votre email" required>
        </div>

        <div class="form-group">
            <label for="reg-password">Mot de passe</label>
            <input type="password" id="reg-password" placeholder="Minimum 4 caractères" required>
        </div>

        <div class="form-group">
            <label for="reg-password-confirm">Confirmer le mot de passe</label>
            <input type="password" id="reg-password-confirm" placeholder="Confirmez votre mot de passe" required>
        </div>

        <div class="connexion">
            <button type="submit">S'inscrire</button>
        </div>

        <div class="liens">
            <a href="#" class="comp">Retour à la connexion</a>
        </div>
    `;

    attachRegisterEvents();
}

// ===== ÉVÉNEMENTS LOGIN =====

function attachLoginEvents() {
    const form = document.querySelector('form');
    const linkCreateAccount = document.querySelector('a.comp');
    const linkForgotPassword = document.querySelector('a.mdp');

    if (form) {
        // ✅ onsubmit (au lieu de addEventListener) → pas de doublon
        form.onsubmit = function(e) {
            e.preventDefault();
<<<<<<< HEAD

=======
            
>>>>>>> 2daa20932202cf201b7f591f3eaccf37c81e3281
            const email = form.querySelector('input[name="email"]').value.trim();
            const password = form.querySelector('input[name="password"]').value.trim();
            const remember = form.querySelector('input[name="souvenir"]').checked;

            login(email, password, remember);
        };
    }

    if (linkCreateAccount) {
        linkCreateAccount.onclick = function(e) {
            e.preventDefault();
            switchToRegister();
        };
    }

    if (linkForgotPassword) {
        linkForgotPassword.onclick = function(e) {
            e.preventDefault();
            alert('⚠️ Fonctionnalité en construction.');
        };
    }
}

// ===== ÉVÉNEMENTS REGISTER =====

function attachRegisterEvents() {
    const form = document.querySelector('form');
    const linkBackToLogin = document.querySelector('a.comp');

    if (form) {
        form.onsubmit = function(e) {
            e.preventDefault();

            const email = document.getElementById('reg-email').value.trim();
            const password = document.getElementById('reg-password').value.trim();
            const passwordConfirm = document.getElementById('reg-password-confirm').value.trim();

            register(email, password, passwordConfirm);
        };
    }

    if (linkBackToLogin) {
        linkBackToLogin.onclick = function(e) {
            e.preventDefault();
            switchToLogin();
        };
    }
}

// ===== INITIALISATION =====

window.addEventListener('load', function() {
    // Attacher les événements au formulaire de login
    attachLoginEvents();
<<<<<<< HEAD

    console.log('✅ contact.js chargé avec succès');
});
=======
    
    console.log('✅ succes.js chargé avec succès');
});




>>>>>>> 2daa20932202cf201b7f591f3eaccf37c81e3281
