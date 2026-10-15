<?php 
//Récuperation du chemin complet du fichier
$file = __DIR__."/admin/products.json";

echo "le chemin: $file\n";
if(!file_exists($file)){
die("fichier inexistant");
}
// récuperer le contenu du fichier 
$contenu = file_get_contents($file);
$livres = json_decode($contenu,true);
// var_dump($livres);


require __DIR__.'/admin/config.php';

// $lignes = "SELECT COUNT(*) as livre_count FROM livres;";
// var_dump($pdo->query($lignes)->fetch());


$requete = "INSERT INTO livres (nom, image) VALUES (:nom, :image)";

$stmt = $pdo ->prepare($requete);
foreach ($livres as $key => $livre) {
    # code...
$stmt-> execute([ 
    ':nom' => $livre["nom"],
    ':image' => $livre["image"]
]);
}
