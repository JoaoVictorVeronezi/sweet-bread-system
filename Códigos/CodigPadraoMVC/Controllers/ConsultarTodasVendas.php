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
$resultado = $venda->ConsultarTodasVendas($conexao);

while($registro = $resultado->fetch_assoc()) {
    echo $registro['nome'];
}



/*
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
    while ($registro = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $registro['idvend'] . "</td>" .
             "<td>" . $registro['idproduto'] . "</td>" .
             "<td>" . $registro['qntprod'] . "</td>" . 
             "<td>" . $registro['idvendedor'] ."</td>" .
             "<td>" . $registro['idcliente'] . "</td>";
        echo "</tr>";
    }
    echo "</table><br><br><br><a href='../index.html'>Voltar Para o Menu Principal</a></body></html>";
}*/
?>