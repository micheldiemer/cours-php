<?php
setcookie('langue','',time() - 60);
header('Refresh: 5; URL=langue.php');

echo 'Déconnexion et redirection en cours ...';
die();