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
        
        if ($connect->query($sql)) {
            echo "Funcionario Cadastrado Com Sucesso";
        }else {
            echo "ERRO" . $connect->error;
        }       
    }
    function ConsultarTodosFuncionarios($connect) {
        $sql = "SELECT id, nome, cpf, cargo, login, senha FROM funcionarios ";
        $resultado = $connect->query($sql);
        return $resultado;
    }
    function DeletarFuncionario($cpf, $connect) {
        //função não totalmente pronta
        $sql = "DELETE FROM `funcionarios` WHERE cpf=".$cpf;
        $res = $connect->query($sql);
        return $res;
    }
    function ConsultarFuncionario($cpf, $connect) {
        $sql = "SELECT nome, cpf, cargo FROM funcionarios WHERE cpf=".$cpf;
        $res = $connect->query($sql);
        return $res;
    }
}

?>