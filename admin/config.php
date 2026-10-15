<?php
$host = "localhost";        //ou est mysql
$dbname = "novabooks";      //nom de la base 
$user = "root";             
$pass = ""; 


// Je construis la chaîne qui indique où et dans quelle base me connecter
$dsn = "mysql:host=$host;dbname=$dbname";
// J'ouvre la connexion et je la range dans $pdo pour l'utiliser plus tard
// je peux utiliser try ou catch si la connexion plante 
// $pdo contiendra l'objet de connexion, réutilisable dans les autres fichiers
// try:essasie de faire ca 
//catch: si sa plante fais ceci à la place  
try {
    $pdo = new PDO($dsn, $user, $pass);
} catch (Exception $e){
    echo "Leila, Erreur !" .$e->getMessage(); 
}