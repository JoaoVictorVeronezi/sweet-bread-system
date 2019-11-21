<?php
$nomeErr = $cargoErr = $cpfErr = $loginErr = $senhaErr = "";
$nome = $cargo = $cpf = $login = $senha = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nome"])) {
        $nomeErr = "Nome é necessario";
    } else {
        $nome = test_input($_POST["nome"]);
    }

    if (empty($_POST["cargo"])) {
        $cargoErr = "Cargo é necessario";
    } else {
        $cargo = test_input($_POST["cargo"]);
    }

    if (empty($_POST["cpf"])) {
        $cpfErr = "CPF é necessario";
    } else {
        $cpf = test_input($_POST["cpf"]);
    }

    if (empty($_POST["login"])) {
        $loginErr = "Login é necessario";
    } else {
        $login = test_input($_POST["login"]);
    }

    if (empty($_POST["senha"])) {
        $senhaErr = "Senha é necessario";
    } else {
        $senha = test_input($_POST["senha"]);
    }
}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


//validação de campos de entrada de dados
if (isset($_POST["nome"]) && isset($_POST["cargo"]) && isset($_POST["cpf"]) && isset($_POST["login"]) && isset($_POST["senha"])) {
    if (empty($_POST["nome"])) {
        $erro = "Campo nome obrigatório!";
    }
    if (empty($_POST["cargo"])) {
        $erro = "Campo cargo obrigatório!";
    }
    if (empty($_POST["cpf"])) {
        $erro = "Campo CPF obrigatório!";
    }
    if (empty($_POST["login"])) {
        $erro = "Campo login obrigatório!";
    }
    if (empty($_POST["senha"])) {
        $erro = "Campo senha obrigatório!";
    } else { }
}
