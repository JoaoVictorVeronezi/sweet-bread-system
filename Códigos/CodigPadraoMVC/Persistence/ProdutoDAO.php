<?php

class ProdutoDAO {
   
    function __construct() { }

    function SalvarProduto($produto, $connect) {
        $sql = "INSERT INTO produtos(id, nome, marca, quantidade, preco) VALUES ('" .
                $produto->getID() . "','" .
                $produto->getNome() . "','" .
                $produto->getMarca() . "','" .
                $produto->getQuantidade() . "'," .
                $produto->getPreco() . ")";
        
        if ($connect->query($sql)) {
            echo "Produto Cadastrado Com Sucesso";
        }else {
            
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