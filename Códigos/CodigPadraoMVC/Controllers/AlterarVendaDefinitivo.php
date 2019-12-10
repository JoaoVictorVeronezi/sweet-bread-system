<?php
include_once '../Persistence/Connection.php';
include_once '../Models/Venda.php';
include_once '../Persistence/VendaDAO.php';
//Incluindo os arquivos necessarios

//nomeando cada dado passado por post
$quantidadeprod = $_POST['quantiprod'];
$idvend = $_POST['idvend'];
$idprod = $_POST['idprod'];

//estabelecendo a conexao com o banco
$conexao = new Connection();
$conexao = $conexao->getConnection();

//instanciando uma venda
$vendadao = new VendaDAO();
$resultado = $vendadao->AlterarVenda($idvend, $idprod,$conexao);


if ($resultado == true) {
    echo "update feito com sucesso";
}else {
    echo "erro no update" . "<br>" . $conexao->error;
}

?>