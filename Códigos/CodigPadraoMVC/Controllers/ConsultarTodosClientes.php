<?php
//incluindo respectivas funções
include_once '../Persistence/Connection.php';
include_once '../Persistence/ClienteDAO.php';

//conectando com o banco
$conexao = new Connection();
$conexao = $conexao->getConnection();

//Criando uma instancia da Classe FuncionarioDAO
$clientedao = new ClienteDAO();
//Chamando função pra consultar todos funcionarios
$resultado = $clientedao->ConsultarTodosClientes($conexao);

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
                <th>CPF</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
              </tr>";
    while ($registro = $resultado->fetch_assoc() ) {
        echo "<tr>";
        echo "<td>" . $registro['cpf'] . "</td>" .
             "<td>" . $registro['nome'] . "</td>" .
             "<td>" . $registro['email'] . "</td>" . 
             "<td>" . $registro['telefone'] ."</td>";
        echo "</tr>";
    }
    echo "</table><br><br><br><a href='../index.html'>Voltar Para o Menu Principal</a></body></html>";
}
?>