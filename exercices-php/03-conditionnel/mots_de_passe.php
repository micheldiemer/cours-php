<form method="post" action="index.php">
  Mot de passe : <input type="password" name="pass1" required><br>
  Confirmation : <input type="password" name="pass2" required><br>
  <input type="submit" value="Envoyer">
</form>
<?php
if (isset($_POST['pass1']) && isset($_POST['pass2'])) {
  echo 'Mot de passe reçu : ' . htmlspecialchars($_POST['pass1']) . '<br>';
  echo 'Confirmation reçue : ' . htmlspecialchars($_POST['pass2']) . '<br>';
  /* COMPLETER ICI */
} else {
  echo "(données non envoyées)";
}
