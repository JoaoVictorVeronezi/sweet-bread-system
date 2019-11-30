<?php
    $nome = $_POST['funome'];
    $cargo = $_POST['fucargo'];
    $cpf =  $_POST['fucpf'];
    $login = $_POST['fulogin'];
    $senha = $_POST['fusenha'];

    $conexao = new Connection();
    $conexao = $conexao->getConnectDB();

    $funcionario = new Funcionario($nome, $cargo, $cpf, $login, $senha);


?>