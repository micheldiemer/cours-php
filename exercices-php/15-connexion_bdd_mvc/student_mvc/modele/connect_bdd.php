<?php

// Paramètre de connexion confidentiels
include_once(BASE_INCLUDE . 'modele/env.php');

// Paramètres de connexion par défaut
$bdd_username = $bdd_username ?? 'student';
$bdd_password = $bdd_password ?? 'student';
$bdd_host = $bdd_host ?? 'localhost';
$bdd_port = $bdd_port ?? 3306;
$bdd_dbname = $bdd_dbname ?? 'src_mariadb';
$dsn = "mysql:host=$bdd_host;port=$bdd_port;dbname=$bdd_dbname; charset=UTF8";
$options =
  [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,

    PDO::ATTR_DEFAULT_FETCH_MODE =>
    PDO::FETCH_ASSOC,

    PDO::ATTR_EMULATE_PREPARES => false
  ];

function connectDb(): ?PDO
{
  try {
    // Connexion à la base de donnée
    global $dsn, $bdd_username, $bdd_password, $options;
    $pdo = new PDO($dsn, $bdd_username, $bdd_password, $options);
  } catch (PDOException $e) {
    // en cas d'erreur
    echo "Erreur connexion à la base de données<br>";
    echo $e->getCode() . ' ' . $e->getMessage() . '<br>';
    http_response_code(500);
    $pdo = null;
  }
  return $pdo;
}



function getPdo()
{
  return connectDb();
}


function resetDb()
{
  global $dsn, $bdd_host, $bdd_username, $bdd_password, $bdd_dbname;
  global $options;
  global $bdd_root_username, $bdd__root_password;
  $pdo_root = new PDO($dsn, $bdd_root_username, $bdd_root_password, $options);

  $user_host = "'$bdd_username'@'$bdd_host'";
  $sql = 'DROP USER IF EXISTS ' . $user_host;
  echo $sql;
  $pdo_root->exec($sql);

  $sql = "CREATE USER $user_host IDENTIFIED VIA mysql_native_password USING PASSWORD('$bdd_password')";
  $pdo_root->exec($sql);

  $sql = "GRANT USAGE ON *.* TO $user_host ";
  $sql .= " REQUIRE NONE WITH MAX_QUERIES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 ";
  $sql .= " MAX_UPDATES_PER_HOUR 0 MAX_USER_CONNECTIONS 0";
  $pdo_root->exec($sql);

  $sql = "GRANT ALL PRIVILEGES ON `${bdd_dbname}`.* TO $user_host";

  $pdo = getPdo();


  $sql = file_get_contents(BASE_URL . 'modele/student.sql');
  $pdo->exec($sql);
}
