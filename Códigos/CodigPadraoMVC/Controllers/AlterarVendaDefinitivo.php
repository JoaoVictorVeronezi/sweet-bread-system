<?php
include_once '../Persistence/Connection.php';
include_once '../Models/Venda.php';
include_once '../Persistence/VendaDAO.php';



$quantidadeprod = $_POST['quantiprod'];
$idvend = $_POST['idvend'];
$idprod = $_POST['idprod'];

$conexao = new Connection();
$conexao = $conexao->getConnection();


$vendadao = new VendaDAO();
$resultado = $vendadao->AlterarVenda($idvend, $idprod,$conexao);

if ($resultado == true) {
    echo "update feito com sucesso";
}else {
    echo "erro no update" . "<br>" . $conexao->error;
}

?>