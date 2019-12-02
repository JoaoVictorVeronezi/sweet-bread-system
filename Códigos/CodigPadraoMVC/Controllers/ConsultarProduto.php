<?php
include_once '../Persistence/Connection.php';
include_once '../Persistence/ProdutoDAO.php';

$id =  $_POST['prid'];


$conexao = new Connection();
$conexao = $conexao->getConnection();
 
$produtodao = new ProdutoDAO();
$resultado = $produtodao->ConsultarProduto($id, $conexao);

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
                  <th>Nome</th>
                  <th>Marca</th>
                  <th>Quantidade</th>
                  <th>Preço</th>
                </tr>";
      while ($registro = $resultado->fetch_assoc() ) {
          echo "<tr>";
          echo "<td>" . $registro['nome'] . "</td>" . 
               "<td>" . $registro['marca'] ."</td>" . 
               "<td>" . $registro['quantidade'] . "</td>" .
               "<td>" . $registro['preco'] . "</td>"; 
          echo "</tr>";
      }
      echo "</table><br><br><br><a href='../index.html'>Voltar Para o Menu Principal</a></body></html>";
}else {
    echo "<script> alert('PRODUTO NAO ENCONTRADO!')</script>";
}

?>