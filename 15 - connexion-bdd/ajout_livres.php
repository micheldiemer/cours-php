<?php

$message = "";

if (!empty($_POST)){
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";

    $livre = ucfirst($_POST["livre"]);
    $auteur = ucfirst($_POST["auteur"]);

    // Connexion a la base de donnée
    $pdo = new PDO('mysql:host=localhost;dbname=bibliotheque',
    "testPdo","aHrS-SvT[u8]L6r8");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);


    // Enregistrement dans la BDD

    

    $enregistrement = $pdo->prepare("INSERT INTO ouvrages
    (anneeParution,titreOuvrage ) VALUES (?, ?);");

    $resultat = $enregistrement->execute(
        [$auteur, $livre]
    );

    if ($resultat){
        $message = "Le livre $livre, dont l'auteur est $auteur, a bien été ajouté à la liste des livres";
    }else{
        $message = "Votre livre n'a pas correctement été ajouté à la base de donnée.";
        exit();
    }



}

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"> <!--Sélectionne l'encodage-->
        <meta name="description" content="La base d'une page HTML, pour des étudiants">
        <meta name="keywords" content="HTML, CSS, Javascript">
        <meta name="author" content="Ressources Internet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>Ajouter un livre</title> <!---- La balise <title> permet d'ajouter 
        le titre dans l'onglet -->
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <!-- <link rel="stylesheet" type="text/css" href="css\reset.css" /> -->
        <link rel="stylesheet" type="text/css" href="css/style.css" />    
         
    </head>
    <body>
        <h1>Ajouter un livre dans la base de donnée</h1>
        <form action="" method="post">
            <div class="conteneurLivre">
                <label for="livre">Le titre de votre libre : </label>
                <input type="text" name="livre" id="livre" required/>
            </div>
            </div>
            <div class="conteneurAuteur">
                <label for="auteur">L'auteur du livre : </label>
                <input type="text" name="auteur" id="auteur" required/>
            </div>
            <input type="submit">
        </form>

        <div class="conteneurMessage">
            <?= $message ?>
        </div>
    </body>
</html>