<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"> <!--Sélectionne l'encodage-->
        <meta name="description" content="La base d'une page HTML, pour des étudiants">
        <meta name="keywords" content="HTML, CSS, Javascript">
        <meta name="author" content="Ressources Internet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>Les fonctions</title> <!---- La balise <title> permet d'ajouter
        le titre dans l'onglet -->
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <link rel="stylesheet" type="text/css" href="css/reset.css" />  <!--Le reset ou normalize permet
        de s'assurer que les navigateurs aient le même style de départ-->
        <link rel="stylesheet" type="text/css" href="css/style.css" />

    </head>
    <body>

    <?php

        /*
        // Une portion de code que l'on souhaite réutiliser
        $prixHt = 1235;
        $prixTtc = $prixHt*1.20;
        echo "Le prix TTC de $prixHt € est $prixTtc €<br>";
        */

        /* Création de la fonction
         * Paramètres
         *  prixHt : prix Hors Taxes
         * Valeur retour
         *  prix TTC
        */
        ///*
        function calculTTC(float $prixHT) {
            $prixTTC = $prixHT * (1 + 20/100);
            return $prixTTC;
        }
        $prixHT = 1235;
        echo 'Le prix TTC de ' . $prixHT  . ' est ' .calculTTC($prixHT). ' <br>';

        // Création d'une procédure d'affichage
        function calculeEtAffiche(float $prixHT) {
            $prixTTC = calculTTC($prixHT);
            //echo 'Le prix TTC de ' . $prixHt  . ' € est ' . $prixTtc . '<br>';
            echo 'Le prix TTC de ' . number_format($prixHT,2,',')
                        . ' € est ' . number_format($prixTTC,2,',') . ' €<br>';
        }
        calculeEtAffiche(20);
        calculeEtAffiche(30);
        calculeEtAffiche(50);
        //*/

        /*
        // Paramètres optionnels
        function calculTTC_2(float $prixHT, float $TX_TVA = 0.20) {
            $prixTTC = $prixHT * (1 + $TX_TVA);
            return $prixTTC;
        }

        // Création d'une procédure d'affichage
        function calculeEtAffiche_2(float $prixHT, float $TX_TVA = 0.20) {
            $prixTTC = calculTTC($prixHT);
            //echo 'Le prix TTC de ' . $prixHT  . ' € est ' . $prixTTC . '<br>';
            echo 'Le prix TTC de ' . number_format($prixHT,2,',') . ' € '
                        . ' avec un taux de ' . ($TX_TVA * 100) . '%'
                        . ' est ' . number_format($prixTTC,2,',') . '<br>';
        }
        calculeEtAffiche(100);
        calculeEtAffiche(100,5.5);
        */


        /*
        // Portée des variables
        function f() {
            $var_f = 'valeur';
            echo $var_f . ' ' . __FUNCTION__ . ' ' . __LINE__ . '<br>';
        }
        // Erreur : variable f non définie
        //echo $var_f . __LINE__ . '<br>';
        */

        /*
        // Utilisation de la variable compteur qui existe en-dehors de la fonction
        $compteur = 0;
        function compte() {
            global $compteur;
            $compteur++;
        }
        compte();
        compte();
        compte();
        echo 'Comptage : ' . $compteur . "<br>";
        */

        /*
        // static : garder en mémoire la valeur d'une variable
        function compteStatic() {
            static $compteurStatic = 0;
            // la variable $compteurStatic n'existe que dans la fonction
            $compteurStatic++;
            echo __FUNCTION__ . '  appelée ' . $compteurStatic . ' fois.<br>';
        }
        compteStatic();
        compteStatic();
        compteStatic();
        compteStatic();
        */


        /*
        // Passage par valeur
        function test($param) {
            echo 'Fonction ' . __FUNCTION__ . ' ligne ' . __LINE__ .
                ' $param=' . $param. '<br>';

            $param = "nouvelle valeur";

            echo 'Fonction ' . __FUNCTION__ . ' ligne ' . __LINE__ .
                ' $param=' . $param  . '<br>';
        }
        $param = 'test';
        echo ' ligne ' . __LINE__ .  ' $param=' . $param . '<br>';
        test($param);
        echo ' ligne ' . __LINE__ .  ' $param=' . $param . '<br>';
        */

        /*
        // Passage par référence avec le &
        // Passage de type Données/Résultat
        function augmenter_buffer(&$buffer) {
            echo 'Fonction ' . __FUNCTION__ . ' ligne ' . __LINE__ .
                ' $buffer=' . $buffer. '<br>';

            $buffer .= " ... des données qui viennent du réseau ...";

            echo 'Fonction ' . __FUNCTION__ . ' ligne ' . __LINE__ .
                ' $buffer=' . $buffer  . '<br>';
        }
        $buffer = 'test';
        echo ' ligne ' . __LINE__ .  ' $buffer=' . $buffer . '<br>';
        augmenter_buffer($buffer);
        echo ' ligne ' . __LINE__ .  ' $buffer=' . $buffer . '<br>';
        */
    ?>

    </body>
</html>