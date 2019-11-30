<?php

class FuncionarioDAO {
   
    function __construct() { }

    function salvar($funcionario, $connect) {
        $sql = "INSERT INTO funcionarios(nome, cargo, cpf, login, senha) VALUES ('" .
                $funcionario->getNome() . "','" .
                $funcionario->getCargo() . "','" .
                $funcionario->getCpf() . "','" .
                $funcionario->getLogin() . "','" .
                $funcionario->getSenha() . "'" . ")";
        
        
        echo "<br>" . $sql;
        
        if ($connect->query($sql)) {
            echo "funcionario salvo";
        }else {
            echo "Fim" . $connect->error;
        }       
    }
}

?>