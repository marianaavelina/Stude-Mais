<?php
//conexão com banco de dados
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'studemais';

$conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

//if($conexao->connect_errno){
  //  echo 'Erro';
//} else {
 //   echo 'Conexão efetuada com sucesso!';
//}

?>