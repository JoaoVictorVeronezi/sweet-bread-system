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
        $sql = "SELECT nome, cpf, cargo, login, senha FROM funcionarios ";
        $resultado = $connect->query($sql);
        return $resultado;
    }
    function DeletarFuncionario($cpf, $connect) {
        //função não totalmente pronta
        $sql = "DELETE FROM funcionarios WHERE cpf=".$cpf;
        
        if ($connect->query($sql) === TRUE) {
            echo "<script> alert('Funcionário removido!')</script>";
        } else {
            echo "Erro na remoção: " . $connect->error;
        }
    }
    function ConsultarFuncionario($cpf, $connect) {
        $sql = "SELECT nome, cpf, cargo FROM funcionarios WHERE cpf=".$cpf;
        $res = $connect->query($sql);
        return $res;
    }
    function AlterarFuncionario($funcionario, $connect) {
        $sql = " UPDATE funcionarios SET nome='" . 
        $funcionario->getNome() . "' ,cpf='" . 
        $funcionario->getCpf() . "',cargo='" . 
        $funcionario->getCargo() ."' WHERE cpf=". 
        $funcionario->getCpf();
        $res = $connect->query($sql);
        
        return $res;
    }
    
}

?>