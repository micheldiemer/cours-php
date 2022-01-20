<h2>Campanules et primevères</h2>
<p>Calculer le prix d'achat des campanulese et des primevères</p>
<ul>Règles de gestion :
  <li>1,80 € / pot de campanules</li>
  <li>2,40 € / pot de primevères</li>
  <li>10% de réduction sur le total pour 5 pots de campanules achetés ou 6 pots de primevères achetés</li>
</ul>
<?php
$primevere = $_GET['primeveres'] ?? 0;
$campanules = $_GET['campanules'] ?? 0;
?>
<form method="GET" action="<?= $action ?>">
  <label for name="primeveres">Pots primevères : </label>
  <input type="number" name="primeveres" /><br>
  <label for name="campanules">Pots campanules : </label>
  <input type="number" name="campanules" />
  <input type="submit" value="envoyer">
</form>

<?php

/* compléter à partir d'ici */

?>