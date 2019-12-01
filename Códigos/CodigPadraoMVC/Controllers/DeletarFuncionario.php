<?php
include_once '../Persistence/Connection.php';
include_once '../Persistence/FuncionarioDAO.php';


$conexao = new Connection();
$conexao = $conexao->getConnection();


 
$funcionariodao = new FuncionarioDAO();
$funcionariodao->DeletarFuncionario();

?>