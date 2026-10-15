<?php
$host = "localhost";
$dbname = "novabooks";
$user = "root";
$pass = "";

$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✅ Connexion OK<br>";

    $stmt = $pdo->query("SELECT COUNT(*) AS total FROM articles");
    $resultat = $stmt->fetch();
    echo "📚 Nombre de livres : " . $resultat['total'];
} catch (Exception $e) {
    echo "❌ Erreur : " . $e->getMessage();
}