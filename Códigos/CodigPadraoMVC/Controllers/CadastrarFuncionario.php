<?php
    $nome = $_POST['funome'];
    $cpf =  $_POST['fucpf'];
    $cargo = $_POST['fucargo'];
    $login = $_POST['fulogin'];
    $senha = $_POST['fusenha'];

    $conexao = new Connection();
    $conexao = $conexao->getConnectDB();

?>