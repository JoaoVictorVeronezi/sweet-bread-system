<?php
include_once "../Persistence/Connection.php";
include_once "../Models/Venda.php";
include_once "../Persistence/VendaDAO.php";

$idProd = $_POST['idprod'];
$idCliente =  $_POST['idCliente'];
$idVend= $_POST['idVendedor'];
$qntProd = $_POST['idprod'];

$conexao = new Connection();
$conexao = $conexao->getConnection();

$v = new Venda($idProd, $idCliente, $idVend, $qntProd);
 
$venda = new VendaDAO();
if ($venda->canBuy($idProd, $qntProd, $conexao)) {
    $venda->atualizarQntProduto($v->getidproduto(),$v->getqntproduto(), $conexao);
    $venda->SalvarVenda($v->getidproduto(),$v->getqntproduto(),$v->getqntproduto(),$v->getidCliente(), $conexao);
}


?>