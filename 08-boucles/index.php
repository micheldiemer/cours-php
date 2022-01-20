<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8"> <!--Sélectionne l'encodage-->
        <meta name="description" content="La base d'une page HTML, pour des étudiants">
        <meta name="keywords" content="HTML, CSS, Javascript">
        <meta name="author" content="Ressources Internet">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <title>Boucles en php</title> <!---- La balise <title> permet d'ajouter 
        le titre dans l'onglet -->
        <link rel="icon" type="image/png" href="images/favicon.png" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />    
         
    </head>
    <body>
        <?php

        /*
        while($condition){
            instructions
        }
        */

        /*
        while(true){
            echo "Salut !"; 
        }
        echo '<hr>';
        */
        
        /*
        $i = 0;
        while($i < 10)
        {
            echo "Salut $i<br>";
            $i++;
        }
        echo 'Boucle terminée $i = ' . $i . '<br>';
        echo '<hr>';
        
        Valeur $i     Test $i<10    Affichage   $i++
        0             vrai          Salut 0     1
        1             vrai          Salut 1     2
        2             vrai          Salut 2     3
        3             vrai          Salut 3     4
        4             vrai          Salut 4     5
        5             vrai          Salut 5     6
        6             vrai          Salut 6     7
        7             vrai          Salut 7     8
        8             vrai          Salut 8     9
        9             vrai          Salut 9     10
        10            faux
        echo '<hr>'
        -------------------------------------------
        */

        /*
        $j = 0;
        while($j < 10)
        {
            echo "$j * $j = " . $j*$j . "<br>";
            $j++;
        }
        echo '<hr>';
        */

        /*
        $continuer = true;
        while($continuer) 
        {
            echo 'je continue parce que $continuer est vrai<br>';
            echo 'le critère pour continuer ou s\'arrêter est parfois complexe';
            $continuer = false;
        }
        echo '<hr>';
        */



        /*
        for(<initialisation> ; <condition> ; <incrément>)
        {

        }
        */
     
        /*
        // La boucle for
        for($i = 10 ; $i <= 20 ; $i++)
        {
            echo $i . "<br>";
        }
        echo '<hr>';
        */

        ?>

        <p>Exercice : Afficher les chiffres de 40 à 70</p>
        <?php
            // La boucle for
            for($i = 40 ; $i <= 70 ; $i++)
            {
                echo $i . ' ';
            }
            echo '<hr>';
        ?>

        <p>Exercice : Affichier les chiffres entre 40 et 100, en comptant de 2 en 2 (40,42,44...)</p>
        <?php
            for($i = 40 ; $i <= 100 ; $i+=2)
            {
                echo $i . ' ';
            }
            echo '<hr>';
        ?>

        <p>Exercice : Faire un décompte pour la nouvelle année</p> 
        <?php
            for($i = 10 ; $i >= 0 ; $i--)
            {
                echo $i . ' ';
            }
            echo '<hr>';
        ?>
    

        <hr>
        <h2>Afficher une liste déroulante qui affiche les années entre 1970 et 2040</h2>

        <form action="" method="get">
            <div class="conteneurListeDeroulante">
                <label for="annee">Choisissez une année : </label>
                <select name="annee" id="annee">
                    <?php
                        for($i=1970;$i<=2040;$i++){
                            // echo "<option value=\"$i\">$i</option>"; 
                           ?>
                           <option value="<?= $i ?>"><?= $i ?></option>
                        <?php }
                    ?>
                
                    <!-- 
                    <option value="1970">1970</option>
                    <option value="1971">1971</option>
                    <option value="1972">1972</option> 
                    -->
                </select>
            </div>
        </form>

        <hr>

        <!-- Creer un tableau, de 10 ligne par 10 colonne, numerotez comme suit 
        Chaque cellule contient le numero de sa ligne, et le numero de sa colonne 

        L1C1 L1C2 L1C3 L1C4 ... 
        L2C1 L2C2 L2C3 L2C4 ... 
        L3C1 L3C2 L3C3 L3C4 ...
        ...  ...  ...  ... -->

        <table style="{border: solid 1px black}">
              <tbody>
                    <?php
                        for($z=1;$z<=50;$z++){ // z est le nombre de colonne
                            ?>
                            <tr>
                            <?php
                                for($i=1;$i<=20;$i++){ // i est le nombre de lignes
                                    ?>
                                        <td>L<?= $z ?>C<?= $i ?></td>
                                    <?php
                                }
                                ?>
                            </tr>
                            <?php
                        }
                    ?>

              </tbody>          
        </table>

    </body>
</html>