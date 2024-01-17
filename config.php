<?php 

$host = 'Localhost';
$usuario = 'root';
$senha = "";
$nome_db = "saude-projeto";

$conexao = new mysqli($host, $usuario, $senha, $nome_db);

//if($conexao->connect_errno)
//{
   // die("A conexao falhou:".mysqli_connect_error());
//}
//else
//{
  //  echo "A conexao foi feita com sucesso";
//}

?>