<?php
include_once '../Persistence/Connection.php';
include_once '../Persistence/FuncionarioDAO.php';


$cpf =  $_POST['fucpf'];

$conexao = new Connection();
$conexao = $conexao->getConnection();


$funcionariodao = new FuncionarioDAO();
$res = $funcionariodao->ConsultarFuncionario($cpf, $conexao);
//controller passivo de mudança

if ($res->num_rows > 0) {
    $registro = $res->fetch_assoc();
echo "<!DOCTYPE html><html><head><meta charset='UTF-8'><title>Consultar e Deletar</title></head>
<body><h1>Consultar e deletar</h1>
<form action='../Controllers/DeletarDefinitivo.php' method='POST''>
    Nome: <input type='text' name='funome' value='" . $registro['nome'] ."'><br><br>
    Cargo: <input type='text' name='fucargo' value='" . $registro['cargo'] . "'><br><br>
    CPF: <input type='text'  name='fucpf' value='" . $registro['cpf'] . "'> <br><br>
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