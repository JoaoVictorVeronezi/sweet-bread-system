<?php
include_once '../Persistence/Connection.php';
include_once '../Models/Produto.php';
include_once '../Persistence/ProdutoDAO.php';

$nome = $_POST['prnome'];
$marca = $_POST['prmarca'];
$quantidade = $_POST['prquanti'];
$preco = $_POST['prpreco'];
$id = $_POST['prid'];

$conexao = new Connection();
$conexao = $conexao->getConnection();

$p = new Produto($id, $nome, $marca, $quantidade, $preco);

$produtodao = new ProdutoDAO();
$resultado = $produtodao->AlterarProduto($p, $conexao);

if ($resultado == true) {
    echo "update feito com sucesso";
}else {
    echo "erro no update" . "<br>" . $conexao->error;
}

?>