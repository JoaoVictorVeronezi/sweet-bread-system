<?php
include_once '../Persistence/Connection.php';
include_once '../Models/Funcionario.php';
include_once '../Persistence/FuncionarioDAO.php';

$nome = $_POST['funome'];
$cargo = $_POST['fucargo'];
$cpf =  $_POST['fucpf'];
$login = $_POST['fulogin'];
$senha = $_POST['fusenha'];

$conexao = new Connection();
$conexao = $conexao->getConnection();

$f = new Funcionario($nome, $cargo, $cpf, $login, $senha);
 
$funcionariodao = new FuncionarioDAO();
$funcionariodao->SalvarFuncionario($f, $conexao);

?>