<?php
require_once 'lib/config.php';

session_start();

$host = host();
try {
$pdo = new PDO('mysql:dbname='.$host['dbName'].';host='.$host['host'].';charset=utf8mb4',''.$host['username'].'', ''.$host['password'].'');

  return $pdo;

} catch (PDOException $e) {
    echo 'Impossible de se connecter à la base de données';
}
?>