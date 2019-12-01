<?php
include_once '../Persistence/Connection.php';
include_once '../Models/Cliente.php';
include_once '../Persistence/ClienteDAO.php';

$nome = $_POST['clinome'];
$cpf =  $_POST['clicpf'];
$tel = $_POST['clitel'];
$email = $_POST['cliemail'];

$conexao = new Connection();
$conexao = $conexao->getConnection();

$c = new Cliente($cpf, $nome, $tel, $email);
 
$clientedao = new ClienteDAO();
$clientedao->SalvarCliente($c, $conexao);

?>