<?php
//incluindo respectivas funções
include_once '../Persistence/Connection.php';
include_once '../Persistence/VendaDAO.php';

//conectando com o banco
$conexao = new Connection();
$conexao = $conexao->getConnection();

//Criando uma instancia da Classe Venda
$venda = new VendaDAO();

//Chamando função pra consultar todos funcionarios
$resultado = $venda->ConsultarTodosProdutos($conexao);

$resultado2 = $venda->ConsultarNomeFuncionario($conexao);

$resultID = $venda->ConsultarIDVenda($conexao);

$resultado3 = $venda->ConsultarNomeCliente($conexao);
$resultado4 = $venda->ConsultarQuantidade($conexao);

if ($resultado->num_rows > 0) {
    echo "<html>
          <head>
          <style>
            table {
              font-family: arial, sans-serif;
              border-collapse: collapse;
              width: 100%;
            }
            td, th {
              border: 1px solid #dddddd;
              text-align: left;
              padding: 8px;
            }
            tr:nth-child(even) {
              background-color: #dddddd;
            }
           </style>
           </head>
           <body>
           <table>
              <tr>
                <th>ID</th>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Vendedor</th>
                <th>Cliente</th>
              </tr>";
    while ($registro = $resultado->fetch_assoc() and 
    $registroFuncionario = $resultado2->fetch_assoc() and 
    $registroCliente= $resultado3->fetch_assoc() and
    $registroQnt = $resultado4->fetch_assoc() and 
    $registroID = $resultID->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $registroID['idvend'] . "</td>" .
             "<td>" . $registro['nome'] . "</td>" .
             "<td>" . $registroQnt['qntprod'] . "</td>" . 
             "<td>" . $registroFuncionario['nome'] ."</td>" .
             "<td>" . $registroCliente['nome'] . "</td>";
        echo "</tr>";
    }
    echo "</table><br><br><br><a href='../index.html'>Voltar Para o Menu Principal</a></body></html>";
}
?>