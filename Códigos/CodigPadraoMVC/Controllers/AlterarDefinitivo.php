<?php
include_once '../Persistence/Connection.php';
include_once '../Models/Funcionario.php';
include_once '../Persistence/FuncionarioDAO.php';

$nome = $_POST['funome'];
$cargo = $_POST['fucargo'];
$cpf =  $_POST['fucpf'];
$login = null;
$senha = null;

$conexao = new Connection();
$conexao = $conexao->getConnection();

$f = new Funcionario($nome, $cargo, $cpf, $login, $senha);

$funcionariodao = new FuncionarioDAO();
$resultado = $funcionariodao->AlterarFuncionario($f, $conexao);

if ($resultado == true) {
    echo "update feito com sucesso";
}else {
    echo "erro no update" . "<br>" . $conexao->error;
}

?>