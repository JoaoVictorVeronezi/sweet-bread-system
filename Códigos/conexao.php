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

if(isset($_POST["acao"])) {
    if($_POST["acao"] == "inserir") {
        inserirFuncionario();
    }
    if($_POST["acao"]=="alterar") {
        alterarFuncionario();
    }
    if($_POST["acao"]=="excluir") {
        excluirFuncionario();
    }
}

function inserirFuncionario() {
    //conectando com o banco
    $banco = connectDB();
    //colocando os valores na $sql
    $sql = "INSERT INTO funcionarios(nome, cargo, cpf, login, senha) 
    VALUES ('{$_POST["nome"]}','{$_POST["cargo"]}','{$_POST["cpf"]}','{$_POST["login"]}', '{$_POST["senha"]}')";
    //fechando o banco
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}
function alterarFuncionario() {
    $banco = connectDB();
    $sql = "UPDATE funcionarios SET nome='{$_POST["nome"]}', cargo='{$_POST["cargo"]}', 
    cpf='{$_POST["cpf"]}', login='{$_POST["login"]}', senha='{$_POST["senha"]}' WHERE id='{$_POST["id"]}'";
    
    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function excluirFuncionario() {
    $banco = connectDB();
    $sql = "DELETE FROM funcionarios WHERE id='{$_POST["id"]}'";

    $banco->query($sql);
    $banco->close();
    voltarIndex();
}

function selectIdFuncionario($id) {
    $banco = connectDB();
    $sql = "SELECT * FROM funcionarios WHERE id =".$id;
    $resultado = $banco->query($sql);
    $pessoa = mysqli_fetch_assoc($resultado);
    return $pessoa;
}

//funcao para selecionar todos os funcionarios
function selectAllFuncionario() {
    $banco = connectDB();
    $sql = "SELECT * FROM funcionarios ORDER BY nome";
    $resultado = $banco->query($sql);
    while($row = mysqli_fetch_array($resultado)) {
        $grupo[] = $row;
    }
    return $grupo;
}

//deixar explicito que vamos buscar dados no formato de UTF
mysqli_set_charset(connectDB(), 'utf8');

//funcao para sempre voltar para a pagina inicial
function voltarIndex() {
    header("Location:index.php");
}

?>