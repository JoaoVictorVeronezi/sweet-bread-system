<?php
include_once '../Persistence/Connection.php';
include_once '../Persistence/VendaDAO.php';

//ID da venda
$id =  $_POST['idvend'];

// fazer a conexao com o bd
$conexao = new Connection();
$conexao = $conexao->getConnection();


$vendadao = new VendaDAO();

$res = $vendadao->joinVendaInfo($conexao, $id);
//controller passivo de mudança

if ($res->num_rows > 0) {
$registro = $res->fetch_assoc();
echo "<!DOCTYPE html><html><head><meta charset='UTF-8'><title>Consultar e Alterar</title></head>
<body><h1>Consultar e Alterar</h1>
<form action='../Controllers/AlterarProdutoDefinitivo.php' method='POST''>
    ID: <input type='text'  name='prid' value='" . $registro['idvend'] . "'> <br><br>
    Cliente: <input type='text' name='prnome' value='" . $registro['nomeCli'] ."'><br><br>
    Marca: <input type='text' name='prmarca' value='" . $registro['nomeFund'] . "'><br><br>
    Quantidade: <input type='text'  name='prquanti'  value='" . $registro['qntprod'] . "'> <br><br>
    Preço: <input type='text'  name='prpreco'  value='" . $registro['nomeProd'] . "'> <br><br>
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