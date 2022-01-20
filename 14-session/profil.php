<?php 

// Verification du pseudo
session_start(); // Permet de demarrer une nouvelle session
    
if(!empty($_POST)) {
    // données de formulaire envoyées
    if (!isset($_POST["pseudo"]) OR $_POST["pseudo"] != "Jojo"){
        session_destroy();
        header("location:connexion.php");
        exit(); 
    }

    // Verification du mot de passe

    if (!isset($_POST["password"]) OR $_POST["password"] != "securite"){
        session_destroy();
        header("location:connexion.php");
        exit();
    }
    $_SESSION['is_connect'] = true;
    $_SESSION['pseudo'] = $_POST["pseudo"];
    $pseudo = $_POST["pseudo"];
}  
else {
    // aucune donnée de formulaire envoyée
    // vérification de session existante
    if(isset($_SESSION["is_connect"]) AND $_SESSION["is_connect"] == true) {
        $pseudo = $_SESSION['pseudo'];
    }
    else {
        header("location:connexion.php");
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


        <title>Base d'une page</title> <!---- La balise <title> permet d'ajouter 
        le titre dans l'onglet -->
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css" />    
         
    </head>
    <body>
        <h1 class="text-center my-5">Page de Profil</h1>
        <p class="text-center">Bienvenue sur la page de profil de <?= $pseudo ?></p>

        <a href="info-perso.php" class="btn btn-large btn-primary">Voir mes infos persos</a>
        <a href="connexion.php?r=1" class="btn btn-large btn-primary">Déconnecter</a>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>