<?php
//incluindo respectivas funções
include_once '../Persistence/Connection.php';
include_once '../Persistence/FuncionarioDAO.php';

//conectando com o banco
$conexao = new Connection();
$conexao = $conexao->getConnection();

//Criando uma instancia da Classe FuncionarioDAO
$funcionariodao = new FuncionarioDAO();
//Chamando função pra consultar todos funcionarios
$resultado = $funcionariodao->ConsultarTodosFuncionarios($conexao);

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
                <th>Cargo</th>
                <th>CPF</th>
                <th>Login</th>
              </tr>";
    while ($registro = $resultado->fetch_assoc() ) {
        echo "<tr>";
        echo "<td>" . $registro['id'] . "</td>" .
             "<td>" . $registro['nome'] . "</td>" .
             "<td>" . $registro['cargo'] . "</td>" . 
             "<td>" . $registro['cpf'] ."</td>" .
             "<td>" . $registro['login'] . "</td>";
        echo "</tr>";
    }
    echo "</table></body></html>";
}
?>