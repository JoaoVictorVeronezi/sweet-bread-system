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
    function ConsultarTodosClientes($connect) {
        $sql = "SELECT cpf, nome, telefone, email FROM clientes";
        $resultado = $connect->query($sql);
        return $resultado;
    }
    function DeletarCliente($cpf, $connect) {
    
        $sql = "DELETE FROM clientes WHERE cpf=".$cpf;
        
        if ($connect->query($sql) === TRUE) {
            echo "<script> alert('Funcionário removido!')</script>";
        } else {
            echo "Erro na remoção: " . $connect->error;
        }
    }
    function ConsultarCliente($cpf, $connect) {
        $sql = "SELECT cpf, nome, telefone, email FROM clientes WHERE cpf=".$cpf;
        $res = $connect->query($sql);
        return $res;
    }
    function AlterarCliente($cliente, $connect) {
        $sql = " UPDATE clientes SET nome='" . 
        $cliente->getNome() . "' ,cpf='" . 
        $cliente->getCpf() . "',email='" . 
        $cliente->getTelefone() . "',telefone='" . 
        $cliente->getEmail() ."' WHERE cpf=". 
        $cliente->getCpf();
        $res = $connect->query($sql);
        
        return $res;
    }
    
}

?>