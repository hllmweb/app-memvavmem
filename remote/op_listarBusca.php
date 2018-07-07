<?php 
header("Access-Control-Allow-Origin: *");
// header("Content-Type: application/json");
$conexao = mysqli_connect("67.23.238.90:3306", "memvavme_user", "kb971033", "memvavmem_appWeb");

$nome = $_GET['nome'];


$dados = array();
$query_listar = "SELECT * FROM agenda WHERE nome LIKE '%".$nome."%'";
$resultado_conexao = mysqli_query($conexao, $query_listar);

while($linha = mysqli_fetch_object($resultado_conexao)){
	$dados[] =  $linha;
}
echo json_encode($dados);


?>