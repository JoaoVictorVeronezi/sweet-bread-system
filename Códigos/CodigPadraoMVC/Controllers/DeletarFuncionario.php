<?php
include_once '../Persistence/Connection.php';
include_once '../Persistence/FuncionarioDAO.php';


$cpf =  $_POST['fucpf'];

$conexao = new Connection();
$conexao = $conexao->getConnection();


$funcionariodao = new FuncionarioDAO();
$res = $funcionariodao->DeletarFuncionario($cpf, $conexao);
//controller passivo de mudança

?>