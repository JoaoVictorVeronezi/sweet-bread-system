<?php
include_once '../Persistence/Connection.php';
include_once '../Persistence/FuncionarioDAO.php';

$cpf =  $_POST['fucpf'];


$conexao = new Connection();
$conexao = $conexao->getConnection();
 
$funcionariodao = new FuncionarioDAO();
$resultado = $funcionariodao->ConsultarFuncionario($cpf, $conexao);

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
                  <th>Cargo</th>
                  <th>CPF</th>
                </tr>";
      while ($registro = $resultado->fetch_assoc() ) {
          echo "<tr>";
          echo "<td>" . $registro['nome'] . "</td>" .
               "<td>" . $registro['cargo'] . "</td>" . 
               "<td>" . $registro['cpf'] ."</td>";
          echo "</tr>";
      }
      echo "</table></body></html>";
}else {
    echo "<script> alert('CPF NAO ENCONTRADO!')</script>";
}

?>