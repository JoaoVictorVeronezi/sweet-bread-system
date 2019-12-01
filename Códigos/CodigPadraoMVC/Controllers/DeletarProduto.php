<?php
include_once '../Persistence/Connection.php';
include_once '../Persistence/ProdutoDAO.php';

//variavel para pegar valor do cpf
$id =  $_POST['prid'];


//conexao com o banco
$conexao = new Connection();
$conexao = $conexao->getConnection();

//nova instancia do funcionario
$produtodao = new ProdutoDAO();
$res = $produtodao->ConsultarProduto($id, $conexao);


if ($res->num_rows > 0) {
    $registro = $res->fetch_assoc();
echo "<!DOCTYPE html><html><head><meta charset='UTF-8'><title>Consultar e Deletar</title></head>
<body><h1>Consultar e deletar</h1>
<form action='../Controllers/DeletarProdutoDefinitivo.php' method='POST''>
    ID: <input type='text' name='prid' value='" . $registro['id'] ."'><br><br>
    Nome: <input type='text' name='prnome' value='" . $registro['nome'] ."'><br><br>
    Marca: <input type='text' name='prmarca' value='" . $registro['marca'] . "'><br><br>
    Quantidade: <input type='text'  name='prquanti' value='" . $registro['quantidade'] . "'> <br><br>
    Preço: <input type='text'  name='prpreco' value='" . $registro['preco'] . "'> <br><br>
        <input type='hidden' value='inserir'/>
        <input type='submit' value='Deletar' name='cadastrar'/>
</form>
<a href='../index.html'>Voltar Para o Menu Principal</a>
</body>
</html>";

}else {
    echo "erro";
}

?>