<?php
include_once '../Persistence/Connection.php';
include_once '../Models/Produto.php';
include_once '../Persistence/ProdutoDAO.php';

//Colocando os valores que recebemos no formulario, em variaveis
$nome = $_POST['prnome'];
$id = $_POST['prid'];
$marca =  $_POST['prmarca'];
$quantidade = $_POST['prquanti'];
$preco = $_POST['prpreco'];

//estabelecendo a conexao com o banco
$conexao = new Connection();
$conexao = $conexao->getConnection();

//instanciando o nosso produto
$p = new Produto($id, $nome, $marca, $quantidade, $preco);

//Salvando um novo produto
$produtodao = new ProdutoDAO();
$produtodao->salvarProduto($p, $conexao);

?>