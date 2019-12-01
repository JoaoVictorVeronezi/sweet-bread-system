<?php

class ClienteDAO {
   
    function __construct() { }

    function SalvarCliente($cliente, $connect) {
        $sql = "INSERT INTO clientes(nome, cpf, telefone, email) VALUES ('" .
                $cliente->getNome() . "','" .
                $cliente->getCpf() . "','" .
                $cliente->getTelefone() . "','" .
                $cliente->getEmail() . "'" . ")";
        
        if ($connect->query($sql)) {
            echo "Cliente Cadastrado Com Sucesso";
        }else {
            echo "ERRO" . $connect->error;
        }       
    }
    /*
    function ConsultarTodosFuncionarios($connect) {
        $sql = "SELECT id, nome, cpf, cargo, login, senha FROM funcionarios ";
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
    }*/
    
}

?>