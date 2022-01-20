<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"> <!--Sélectionne l'encodage-->
        <meta name="description" content="La base d'une page HTML, pour des étudiants">
        <meta name="keywords" content="HTML, CSS, Javascript">
        <meta name="author" content="Ressources Internet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>Le conditionnel en PHP</title> <!---- La balise <title> permet d'ajouter
        le titre dans l'onglet -->
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <!-- link rel="stylesheet" type="text/css" href="css\reset.css" / -->
        <!-- Le reset ou normalize permet
        de s'assurer que les navigateurs aient le même style de départ -->
        <link rel="stylesheet" type="text/css" href="css/style.css" />

    </head>
    <body>

    <?php

        /*
        echo '<h2>Opérateurs logiques</h2>';
        $vrai = true;
        $faux = false;
        echo '<pre>';
        echo 'ET logique : VRAI si les deux opérandes sont vraies<br>';
        echo '$vrai &amp;&amp; $vrai : '; var_dump($vrai && $vrai);
        echo '$vrai &amp;&amp; $faux : '; var_dump($vrai && $faux);
        echo '$faux &amp;&amp; $vrai : '; var_dump($faux && $vrai);
        echo '$faux &amp;&amp; $faux : '; var_dump($faux && $faux);
        echo '</pre>';

        echo '<pre>';
        echo 'OU logique : VRAI si les une des opérandes est vraie<br>';
        echo '$vrai || $vrai : '; var_dump($vrai || $vrai);
        echo '$vrai || $faux : '; var_dump($vrai || $faux);
        echo '$faux || $vrai : '; var_dump($faux || $vrai);
        echo '$faux || $faux : '; var_dump($faux || $faux);
        echo '</pre>';

        echo '<pre>';
        echo 'NON logique : inversion vrai / faux<br>';
        echo '!$vrai : '; var_dump(!$vrai);
        echo '!$faux : '; var_dump(!$faux);
        echo '</pre>';
        */


        // $test=false;
        /*
        $test = "avgvbrezbtzr";

        // Je ne rentre dans la condition que si $test est vrai

       /*  $test est faux si et seulement
            $test=false;
            $test=0;
            $test="";
            $test=null;
        */
        /*
        $test="";
        if ($test) {
            echo "Je rentre bien dans la condition<br>";
        }
        echo 'Après la condition<br>';
        */

        //*/

        /*
        //$message_erreur = "Il y a eu une erreur";
        $message_erreur = "";

        // On nomme une variable qui contiendra un message d'erreur s'il y a une erreur.
        // Si il y a une erreur, on affiche l'erreur, puis on coupe l'execution du programme
        if ($message_erreur) {
            echo $message_erreur;
            //die();
            exit(); // Coupe l'exection du script
        }
        echo 'Après la condition<br>';


        // Le point d'exclamation permet d'inverser le boolean.
            // Si $test est vrai, !$test est faux
            // Si $test est faux, !$test est vrai
        if (!$message_erreur){
            echo "congratulation, il n'y a pas eu d'erreur !<br>";
        }
        */


        // Forme complete du if
        /*
        $variable = 1;
        echo $variable . '<br>';
        if ($variable == 1) {
            echo '$variable est égale à 1<br>';
        } elseif ($variable > 1) {
            echo '$variable est supérieure à 1<br>';
        } else {
            echo '$variable est inférieure à 1<br>';
        }
        */

        // Forme ternaire
        //
        /*
        $nb = 12;
        echo $nb .' stagiaire' . ($nb > 1 ? 's ' : '') . '<br>';
        $resultat = ($test) ?
                    ($resultatSiVrai) :
                    ($resultatSiFaux);
        */
        /*
        $monnaie = 7;
        $fruit = ($monnaie <= 5) ? "mangue" : "orange";
        echo '$fruit opérateur ternaire : ' . $fruit . '<br>';
        if ($monnaie <= 5) {
            $fruit = "mangue";
        } else {
            $fruit = "orange";
        }
        echo '$fruit if/else : '  . $fruit . '<br>';
        */

        /*
        $test = 0;

        switch($test){
            case 0:
                echo "La variable $test est egale a 0<br>";
                break;
            case 1:
                echo "La variable $test est egale a 1<br>";
                break;
            case 2:
                echo "La variable $test est egale a 2<br>";
                break;
            case 3:
                echo "La variable $test est egale a 3<br>";
                break;
            case 4:
                echo "La variable $test est egale a 4<br>";
                break;
            default:
                echo "Ce nombre n'est pas compris entre 0 et 4<br>";
        }
        */

        /*
        echo '<p>';
        $aspirateur = true;
        echo "valeur \$aspirateur : # $aspirateur #<br>";
        echo 'valeur $aspirateur : '; var_dump($aspirateur); echo '<br>';
        echo 'valeur $aspirateur : ';
        if($aspirateur) echo 'vrai'; else echo 'faux';
        echo '<br>';
        echo 'valeur $aspirateur : ' . ($aspirateur ? 'vrai' : 'faux') . '<br>';


        echo '<p>';
        $aspirateur = false;
        echo "valeur \$aspirateur : # $aspirateur #<br>";
        echo 'valeur $aspirateur : '; var_dump($aspirateur); echo '<br>';
        echo 'valeur $aspirateur : ';
        if($aspirateur) echo 'vrai'; else echo 'faux';
        echo '<br>';
        echo 'valeur $aspirateur : ' . ($aspirateur ? 'vrai' : 'faux') . '<br>';

        echo '<p>';
        $aspirateur = true;
        echo 'L\'aspirateur ' . ($aspirateur ? 'a' : 'n\'a pas') . ' été passé.';

        echo '<p>';
        $aspirateur = false;
        echo 'L\'aspirateur ' . ($aspirateur ? 'a' : 'n\'a pas') . ' été passé.';
        */
        ///*
        $magnitude = random_int(0,10);
        echo 'Tremblement de terre de magnitude ' . $magnitude . '<br>';
        switch($magnitude) {
            case 1:
                echo 'Micro-tremblement de terre, non ressenti<br>';
                break;
            case 2:
                echo 'Très mineur. Non ressenti mais détecté<br>';
                break;
            case 3:
                echo 'Mineur. Causant rarement des dommages<br>';
                break;
            case 4:
                echo 'Léger. Secousses notables d’objets à l’intérieur des maisons<br>';
                break;
            case 5:
                echo 'Modéré. Légers dommages aux édifices bien construits<br>';
                break;
            case 6:
                echo 'Fort. Destructeur dans des zones allant jusqu’ à 180 kilomètres à la ronde si elles sont peuplées<br>';
                break;
            case 7:
                echo 'Majeur. Dommages modérés à sévères dans des zones plus vastes.<br>';
                break;
            case 8:
                echo 'Important. Dommages sérieux dans des zones à des centaines de kilomètres à la ronde<br>';
                break;
            case 9:
                echo 'Dévastateur. Dévaste des zones sur des milliers de kilomètres à la ronde<br>';
                break;
            default:
                if($magnitude > 9) {
                    echo 'APOCALYPSE !!!<br>';
                } else {
                    die('Erreur de saisie.<br>');
                }

        } //*/
        ?>
        <form method="GET" action="index.php">
            Description des dégâts (select) :<br>
            <select name="degats" required>
                <option value="">Choisir</option>
                <option value="micro">Micro</option>
                <option value="tresmineur">Très Mineur</option>
                <option value="mineur">Mineur</option>
                <option value="leger">Léger</option>
                <option value="modere">Modéré</option>
                <option value="fort">Fort</option>
                <option value="majeur">Majeur</option>
                <option value="important">Dévastateur</option>
                <option value="devastateur">Important</option>
                <option value="test">(Autre)</option>
                <input type="submit" value="Envoyer" name="submit">
            </select>
        </form>
        <br>
        <form method="GET" action="index.php">
            Description des dégâts (input) :<br>
            <input type="text" name="degats">
            <input type="submit" value="Envoyer" name="submit">
        </form>
        <?php
        if(isset($_GET['degats'])) {
            $degats = $_GET['degats'];

            $degats = preg_replace('/\s+/','',$degats);
            switch(mb_strtolower($degats)) {
                case 'micro':
                    $magnitude = 1;
                    break;
                case 'tresmineur':
                case 'trèsmineur':
                    $magnitude = 2;
                    break;
                case 'mineur':
                    $magnitude = 3;
                    break;
                case 'leger':
                case 'léger':
                    $magnitude = 4;
                    break;
                case 'modere':
                case 'modéré':
                    $magnitude = 5;
                    break;
                case 'fort':
                    $magnitude = 6;
                    break;
                case 'majeur':
                    $magnitude = 7;
                    break;
                case 'important':
                    $magnitude = 8;
                    break;
                case 'devastateur':
                case 'dévastateur':
                    $magnitude = 9;
                    break;
                default:
                    die('Erreur de saisie. Valeur de dégâts '
                             . htmlspecialchars($degats) . ' inconnue.<br>');
            }

            echo 'Pour un niveau de dégâts ' . htmlspecialchars($degats)
                  . ' la magnitude est : ' . $magnitude . '<br>';
        }

        ?>






    </body>
</html>