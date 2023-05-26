<?php
/*Conexão com o banco de dados*/
$connection= new mysqli("localhost","root","","crud");

/*Teste de Conexão*/
if($connection->connect_error){
    die("Erro de Conexão".$connection->connect_error);
}
?>