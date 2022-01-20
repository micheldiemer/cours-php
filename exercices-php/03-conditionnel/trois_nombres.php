<h2>Plus grand, plus petit</h2>
<p>Trouver le plus grand / le plus petit parmi une série de trois nombres</p>
<?php
$a = $_GET['a'] ?? 0;
$b = $_GET['b'] ?? 0;
$c = $_GET['c'] ?? 0;
?>
<form method="GET" action="<?= $action ?>">
  <label for name="a">a=</label>
  <input type="number" name="a" /><br>
  <label for name="b">b=</label>
  <input type="number" name="b" /><br>
  <label for name="c">c=</label>
  <input type="number" name="c" /><br>
  <input type="submit" value="envoyer">
</form>

<?php

/* compléter à partir d'ici */

?>