<!-- 
    Pagina destinada a mostra a tabela de funcionarios presente na empresa, somente gerentes podem 
    ver e usar.
-->
<?php
include("conexao.php");
$grupo = selectAllFuncionario();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
</head>

<body>
    <h1>Tabela de Funcionários</h1>
    <table border="1">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Cargo</th>
                <th>CPF</th>
                <th>Editar</th>
                <th>Excluir</th>
                
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($grupo as $funcionario) { ?>
                <tr>
                    <td><?= $funcionario["nome"] ?></td>
                    <td><?= $funcionario["cpf"] ?></td>
                    <td><?= $funcionario["cargo"] ?></td>
                    <td><?= $funcionario["login"] ?></td>
                    
                    <td>
                        <form name="alterar" action="alterar.php" method="POST">
                            <input type="hidden" name="id" value=<?= $funcionario["id"] ?> />
                            <input type="submit" value="Editar" name="editar" />
                        </form>
                    </td>
                    <td>
                        <form name="excluir" action="conexao.php" method="POST">
                            <input type="hidden" name="id" value=<?= $funcionario["id"] ?> />
                            <input type="hidden" name="acao" value="excluir" />
                            <input type="submit" value="Excluir" name="excluir" />
                        </form>
                    </td>
                </tr>
            <?php  }
            ?>
        </tbody>
    </table>
    <br>

    <a href="cadastrar.php">Cadastrar Novos Funcionarios</a>
    <?php
    function formatoData($data)
    {
        $array = explode("-", $data);
        $novaData = $array[2] . "/" . $array["1"] . "/" . $array[0];
        return $novaData;
    }
    ?>
</body>

</html>
