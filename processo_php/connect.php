<?php
$dsn = 'mysql:host=localhost;dbname=docsaude';
$username = 'root';
$password = '';

try {
  $pdo = new PDO($dsn, $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Erro de conexão: " . $e->getMessage();
  exit();
}
