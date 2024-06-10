<?php
$hostname = 'localhost';
$BD = 'hotel';
$user = 'root';
$password = '';

// Correção aqui: "new mysqli" em vez de "new $mysqli"
$mysqli = new mysqli($hostname, $user, $password, $BD);

// Correção aqui: "connect_error" em vez de "connect_erro"
if ($mysqli->connect_error) {
    echo 'Erro na conexão: ' . $mysqli->connect_error;
} else {
  //  echo 'Conexão bem-sucedida!';
}
?>
