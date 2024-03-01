<?php
$host ="localhost"; 
$user ="root";
$senha ="";
$bd ="sistema";

$conexao = new mysqli($host,$user,$senha,$bd)
 if($conexao){
 echo"erro ao se conectar com o banco de dados".mysqli_connect_error();
 }
else($conexao){
echo"sua tentativa deu certo"
}



?>