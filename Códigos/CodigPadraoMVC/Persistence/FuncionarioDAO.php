<?php

class FuncionarioDAO {
   
    function __construct() { }

    function salvar($funcionario) {
        $sql = "INSERT INTO funcionarios(nome, cargo, cpf, login, senha) VALUES ('" .
                $funcionario->getNome() . "','" .
                $funcionario->getCargo() . "','" .
                $funcionario->getCpf() . "','" .
                $funcionario->getLogin() . "','" .
                $funcionario->getSenha() . "'" . ")";
        
        
        echo "<br>" . $sql;

        /*
        if ($conexao->query($sql)) {
            echo "funcionario salvo";
        }else {
            echo "erro" . $connectDB->error;
        }       */
    }

}

?>