<?php
include_once '../Persistence/Connection.php';
include_once '../Persistence/ClienteDAO.php';

$cpf =  $_POST['clicpf'];


$conexao = new Connection();
$conexao = $conexao->getConnection();
 
$clientedao = new ClienteDAO();
$resultado = $clientedao->ConsultarCliente($cpf, $conexao);

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
                  <th>CPF</th>
                  <th>Telefone</th>
                  <th>E-Mail</th>
                </tr>";
      while ($registro = $resultado->fetch_assoc() ) {
          echo "<tr>";
          echo "<td>" . $registro['nome'] . "</td>" .
               "<td>" . $registro['cpf'] . "</td>" . 
               "<td>" . $registro['telefone'] ."</td>" . 
               "<td>" . $registro['email'] ."</td>";
          echo "</tr>";
      }
      echo "</table><br><br><br><a href='../index.html'>Voltar Para o Menu Principal</a></body></html>";
}else {
    echo "<script> alert('CPF NAO ENCONTRADO!')</script>";
}

?>