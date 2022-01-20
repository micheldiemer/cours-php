<?php 





// Connexion a la base de donnée
$pdo = new PDO('mysql:host=localhost;dbname=bibliotheque',
    "testPdo","aHrS-SvT[u8]L6r8");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

// Faire un SELECT avec pdo et la methode query 

// On utilise la methode query pour faire une requete contenant un select. 
// La methode retourne dans $affichage un objet contenant le resultat de la requete, mais ne pouvant pas être affiché tel quel
$affichage = $pdo->query("SELECT * FROM ouvrages");

// On utilise la methode fetch qui va retourner dans la variable $listeAffichage la liste contenant UNE SEULE LIGNE.
// ON DOIS DONC APPLIQUER FETCH PLUSIEURS FOIS POUR EXTRAIRE PLUSIEURS LIGNES


// $listeAffichage = $affichage->fetch(PDO::FETCH_ASSOC);


// On utilise dans ce cas la boucle while, qui va permettre d'afficher tout les résultats du select sous forme de liste
while($listeAffichage = $affichage->fetch(PDO::FETCH_ASSOC)){
    // Tant qu'il reste des éléments dans affichage, on rentre dans la condition.
    // Quand il n'y a plus d'élément, donc que tout a été affiché, la boucle s'arrete

    // FETCH_ASSOC permet d'afficher comme indice le nom de la colonne
    // FETCH_NUM permet d'afficher comme indice l'index numertique de la colonne
    // FETCH_BOTH permet d'afficher comme indice ET le nom de la colonne ET l'index numérique
    echo "<pre>";
    print_r($listeAffichage);
    echo "</pre>";
}

