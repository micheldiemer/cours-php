<hr>
<?php

if (isset($deletePdoException)) {
  $e = $deletePdoException;
?>
  <strong>Erreur suppression du tag <?= $tag->name ?><br></strong><?= $e->getMessage() ?>

<?php } elseif ($tag->name  === '') { ?>
  <strong>Tag introuvable / non supprimé.
  </strong>

<?php } else { ?>

  <strong>Le tag <b><?= $tag->name ?></b> a été supprimé.
  </strong>

<?php } ?>
<hr>