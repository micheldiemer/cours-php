<form method="GET" action="index.php">
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
<?php
if (isset($_GET['degats'])) {
  $degats = $_GET['degats'];
  switch (mb_strtolower($degats)) {
    case 'micro':
      $magnitude = 1;
      break;
    default:
      die('Erreur de saisie. Valeur de dégâts '
        . htmlspecialchars($degats) . ' inconnue.<br>');
  }

  echo 'Pour un niveau de dégâts ' . htmlspecialchars($degats)
    . ' la magnitude est : ' . $magnitude . '<br>';
}
