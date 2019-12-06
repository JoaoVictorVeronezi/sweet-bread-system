<?php
include_once "../Persistence/Connection.php";
include_once "../Models/Venda.php";
include_once "../Persistence/VendaDAO.php";

$idProd = $_POST['idprod'];
$qntProd = $_POST['qntprod'];
$idVend= $_POST['idvendedor'];
$idCliente =  $_POST['idcliente'];

$conexao = new Connection();
$conexao = $conexao->getConnection();

$v = new Venda($idVend, $idProd, $qntProd, $idCliente);

$venda = new VendaDAO();


if ($venda->canBuy($idProd, $qntProd, $conexao)) {
    $venda->atualizarQtdProduto($v->getidproduto(),$v->getqntproduto(), $conexao);
    $venda->salvarVenda($v->getidproduto(),$v->getqntproduto(),$v->getidvendedor(),$v->getidCliente(), $conexao);
    echo "Venda Efetuada com sucesso!";
    echo "<br><br><br><a href='../index.html'>Voltar Para o Menu Principal</a>";
}else {
    echo "ERRO: Produto se encontra indisponivel";
    echo "<br><br><br><a href='../index.html'>Voltar Para o Menu Principal</a>";
}



?>