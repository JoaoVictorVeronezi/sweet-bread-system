<?php
include_once '../Persistence/Connection.php';
include_once '../Persistence/ProdutoDAO.php';

$id = $_POST['prid'];


$conexao = new Connection();
$conexao = $conexao->getConnection();
 
$produtodao = new ProdutoDAO();
$resultado = $produtodao->DeletarProduto($id, $conexao);

?>