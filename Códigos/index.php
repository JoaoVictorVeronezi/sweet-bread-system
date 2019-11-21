<?php
    include("validacao.php");//Arquivo de validacao de campos
    include("conexao.php");//Arquivo para conexao com o banco de dados
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Entrada de dados</title>
        <style>
        .error {color: #FF0000;}
        </style>    
    </head>
<body>
    <!--Inicio do nosso formulario -->
    <h1>Formulario de cadastro</h1>
    <p><span class="error"> * Campos necessarios</span></p>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST">
    <!--$_SERVER["PHP_SELF"] é uma variável super global  -->
        Nome: <input type="text" placeholder="Entre com seu Nome" name="nome" id="nome">
        <span class="error">* <?php echo $nomeErr;?></span>
        <br><br>
        Cargo: <input type="text" placeholder="Entre com seu Cargo" name="cargo" id="cargo">
        <span class="error">* <?php echo $cargoErr;?></span>
        <br><br>
        CPF: <input type="text" placeholder="Somente Numeros" name="cpf" id="cpf">
        <span class="error">* <?php echo $cpfErr;?></span>
        <br><br>
        Login: <input type="text" placeholder="Entre com seu Login" name="login" id="login">
        <span class="error">* <?php echo $loginErr;?></span>
        <br><br>
        Senha: <input type="password" placeholder="*******" name="senha" id="senha">
        <span class="error">* <?php echo $senhaErr;?></span>
        <br><br>
        <input type="hidden" value="-1" name="id" >
	  <button type="submit"> Cadastrar </button>
    </form>

</body>

</html>