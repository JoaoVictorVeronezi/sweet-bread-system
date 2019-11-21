<!-- 
    Pagina destinada para alteração de algum dado de algum funcionario.
-->

<?php
    include("conexao.php");
    $funcionario = selectIdFuncionario($_POST["id"]);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Alterar Dados</title>  
    </head>
<body>
    <!--Inicio do nosso formulario -->
    <h1>Formulario de cadastro</h1>
    <form action="conexao.php" method="POST">
    <!--$_SERVER["PHP_SELF"] é uma variável super global  -->
        Nome: <input type="text" value="<?=$funcionario["nome"]?>" name="nome">
        <br><br>
        Cargo: <input type="text" value="<?=$funcionario["cargo"]?>" name="cargo">
        <br><br>
        CPF: <input type="text" value="<?=$funcionario["cpf"]?>"  name="cpf">
        <br><br>
        Login: <input type="text" value="<?=$funcionario["login"]?>"  name="login">
        <br><br>
        Senha: <input type="text" value="<?=$funcionario["senha"]?>" name="senha" >
        <br><br> 
        <input type="hidden" name="acao" value="alterar">
        <input type="hidden" name="id" value="<?=$funcionario["id"]?>">
        <input type="submit" value="Enviar" name="Enviar"></td>
    </form>

</body>

</html>