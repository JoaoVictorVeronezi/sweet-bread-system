<?php
//incluindo respectivas funções
include_once '../Persistence/Connection.php';
include_once '../Persistence/ProdutoDAO.php';

//conectando com o banco
$conexao = new Connection();
$conexao = $conexao->getConnection();

//Criando uma instancia da Classe FuncionarioDAO
$produtodao = new ProdutoDAO();
//Chamando função pra consultar todos funcionarios
$resultado = $produtodao->ConsultarTodosProdutos($conexao);

if ($resultado->num_rows > 0) {
  //Gambiarra
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
                <th>Nome</th>
                <th>Marca</th>
                <th>Quantidade</th>
                <th>Preço</th>
              </tr>";
    while ($registro = $resultado->fetch_assoc() ) {
        echo "<tr>";
        echo "<td>" . $registro['id'] . "</td>" .
             "<td>" . $registro['nome'] . "</td>" .
             "<td>" . $registro['marca'] . "</td>" . 
             "<td>" . $registro['quantidade'] ."</td>" .
             "<td>" . $registro['preco'] . "</td>";
        echo "</tr>";
    }
    echo "</table><br><br><br><a href='../index.html'>Voltar Para o Menu Principal</a></body></html>";
}
?>