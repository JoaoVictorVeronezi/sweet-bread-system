<?php

class FuncionarioDAO {
   
    function __construct() { }

    function SalvarFuncionario($funcionario, $connect) {
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
    function ConsultarTodosFuncionarios($connect) {
        $sql = "SELECT cpf, nome, cargo, login, senha FROM funcionarios ";
        $resultado = $connect->query($sql);
        return $resultado;
    }

}

?>