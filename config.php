<?php

$dbHostname = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'formulario';

$conexao = new mysqli($dbHostname, $dbUsername, $dbPassword, $dbName);

//if ($construct->connect_errno) {
  //echo "Erro";
//} else {
  //echo "Conexão efetuada com sucesso";
//}