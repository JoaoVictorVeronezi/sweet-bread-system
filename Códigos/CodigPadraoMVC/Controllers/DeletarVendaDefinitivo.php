<?php
include_once '../Persistence/Connection.php';
include_once '../Persistence/VendaDAO.php';

$idprod = $_POST['idprod'];
$idvend = $_POST['idvend'];
$qntprod = $_POST['quantiprod'];

$conexao = new Connection();
$conexao = $conexao->getConnection();
 
$vendadao = new VendaDAO();
$resultado = $vendadao->DeletarProduto($idvend, $conexao);
if ($vendadao->atualizarQtdProdutoDelete($idprod, $qntprod, $conexao)) {
    echo "Venda Excluida com sucesso";
}
echo "<br><br><a href='../index.html'>Voltar Para o Menu Principal</a>"

?>