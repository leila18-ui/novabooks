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
const inputEmail = form ? form.querySelector('input[name="nom"]') : null;
const inputPassword = form ? form.querySelector('input[name="Adresse"]') : null;
const checkboxRemember = form ? form.querySelector('input[name="souvenir"]') : null;
const linkCreateAccount = document.querySelector('a.comp');
const linkForgotPassword = document.querySelector('a.mdp');

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
    
    // Vider les champs et revenir au login
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
    
    setTimeout(function() {
        window.location.href = 'index.html';
    }, 500);
    
    return true;
}

// ===== BASCULER ENTRE LOGIN ET REGISTER =====

function switchToLogin() {
    if (form) {
        form.innerHTML = `
            <h2>Connexion</h2>
            <h2>mail</h2>
            <input type="text" name="nom" placeholder=" ----  "> <br>
            <h2>mot de passe</h2>
            <input type="password" name="Adresse" placeholder=" ---- "> <br>
            
            <div class="souvenir">
            <label>
                <input type="checkbox" name="souvenir">
                Se souvenir de moi
            </label>
            </div>
            
            <div class="connexion">
            <button type="submit">Se connecter</button>
            </div>
            
            <a href="" class="mdp"> Mot de passe oublié?</a> <br>
            <a href="" class="comp">Créer un compte</a>
        `;
        
        // Réattacher les événements
        attachLoginEvents();
    }
}

function switchToRegister() {
    if (form) {
        form.innerHTML = `
            <h2>Créer un compte</h2>
            <h2>Email</h2>
            <input type="email" id="reg-email" placeholder="Votre email" required> <br>
            <h2>Mot de passe</h2>
            <input type="password" id="reg-password" placeholder="Minimum 4 caractères" required> <br>
            <h2>Confirmer le mot de passe</h2>
            <input type="password" id="reg-password-confirm" placeholder="Confirmez votre mot de passe" required> <br>
            
            <div class="connexion">
            <button type="submit">S'inscrire</button>
            </div>
            
            <a href="" class="comp">Retour à la connexion</a>
        `;
        
        // Réattacher les événements
        attachRegisterEvents();
    }
}

// ===== ÉVÉNEMENTS LOGIN =====

function attachLoginEvents() {
    const form = document.querySelector('form');
    const linkCreateAccount = document.querySelector('a.comp');
    const linkForgotPassword = document.querySelector('a.mdp');
    
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const email = form.querySelector('input[name="nom"]').value.trim();
            const password = form.querySelector('input[name="Adresse"]').value.trim();
            const remember = form.querySelector('input[name="souvenir"]').checked;
            
            login(email, password, remember);
        });
    }
    
    if (linkCreateAccount) {
        linkCreateAccount.addEventListener('click', function(e) {
            e.preventDefault();
            switchToRegister();
        });
    }
    
    if (linkForgotPassword) {
        linkForgotPassword.addEventListener('click', function(e) {
            e.preventDefault();
            alert('⚠️ Fonctionnalité en construction.');
        });
    }
}

// ===== ÉVÉNEMENTS REGISTER =====

function attachRegisterEvents() {
    const form = document.querySelector('form');
    const linkBackToLogin = document.querySelector('a.comp');
    
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const email = document.getElementById('reg-email').value.trim();
            const password = document.getElementById('reg-password').value.trim();
            const passwordConfirm = document.getElementById('reg-password-confirm').value.trim();
            
            register(email, password, passwordConfirm);
        });
    }
    
    if (linkBackToLogin) {
        linkBackToLogin.addEventListener('click', function(e) {
            e.preventDefault();
            switchToLogin();
        });
    }
}

// ===== INITIALISATION =====

window.addEventListener('load', function() {
    // Si déjà connecté, rediriger vers index.html
    const currentUser = getCurrentUser();
    if (currentUser) {
        window.location.href = 'index.html';
    }
    
    // Attacher les événements au formulaire de login
    attachLoginEvents();
    
    console.log('✅ succes.js chargé avec succès');
});




function login(email, password, remember) {
    // ... vérification ...

    saveCurrentUser(email);
    alert('✅ Connexion réussie !');

    // Récupérer la page demandée avant la connexion
    const redirect = localStorage.getItem('redirectAfterLogin') || 'index.html';
    localStorage.removeItem('redirectAfterLogin');

    setTimeout(() => {
        window.location.href = redirect;
    }, 500);
}