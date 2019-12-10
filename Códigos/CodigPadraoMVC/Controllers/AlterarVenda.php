<?php
include_once '../Persistence/Connection.php';
include_once '../Persistence/VendaDAO.php';


$id =  $_POST['prid'];

$conexao = new Connection();
$conexao = $conexao->getConnection();


$venda = new VendaDAO();
$res = $venda->ConsultarProduto($id, $conexao);

$resultado2 = $venda->ConsultarNomeFuncionario($conexao);

$resultado3 = $venda->ConsultarNomeCliente($conexao);
$resultado4 = $venda->ConsultarQuantidade($conexao);

if ($res->num_rows > 0) {
$registro = $res->fetch_assoc();
$registroFuncionario = $resultado2->fetch_assoc(); 
$registroCliente= $resultado3->fetch_assoc();
$registroQnt = $resultado4->fetch_assoc();

echo "<!DOCTYPE html><html><head><meta charset='UTF-8'><title>Consultar e Deletar</title></head>
<body><h1>Consultar e deletar</h1>
<form action='../Controllers/AlterarVendaDefinitivo.php' method='POST''>
    Nome: <input type='text' name='prnome' value='" . $registro['nome'] ."'><br><br>
    Quantidade: <input type='text'  name='prquanti'  value='" . $registroQnt['qntprod'] . "'> <br><br>
    Vendedor: <input type='text'  name='prpreco'  value='" . $registroFuncionario['nome'] . "'> <br><br>
    Cliente: <input type='text'  name='prpreco'  value='" . $registroCliente['nome'] . "'> <br><br>
        <input type='hidden' value='inserir'/>
        <input type='submit' value='Alterar' name='cadastrar'/>
</form>
<br><br><br><a href='../index.html'>Voltar Para o Menu Principal</a>
</body>
</html>";

}else {
    echo "erro";
}

?>