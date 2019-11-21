<?php
//Conexao com o bando de dados
function connectDB() {
    // essa funcao conecta com o banco de dados, levando nosso IP = localhost, nosso login = root, 
    // não possuimos senha, e o nome da tabela = projeto_engenharia;
    $conexao = new mysqli("localhost", "root", "", "projeto_engenharia");
    return $conexao;
}

if (connectDB()->connect_errno) {
    //se gerar erro, ou seja, nao conectar, vvamos dar echo
    echo "Erro com o banco de dados";
    exit;
}
?>