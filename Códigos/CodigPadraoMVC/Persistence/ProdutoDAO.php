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
            echo "ERRO" . $connect->error;
        }       
    }
    
    function ConsultarTodosProdutos($connect) {
        $sql = "SELECT id, nome, marca, quantidade, preco FROM produtos ";
        $resultado = $connect->query($sql);
        return $resultado;
    }
    
    
    function DeletarProduto($id, $connect) {
        //função não totalmente pronta
        $sql = "DELETE FROM produtos WHERE id=".$id;
        
        if ($connect->query($sql) === TRUE) {
            echo "<script> alert('Funcionário removido!')</script>";
        } else {
            echo "Erro na remoção: " . $connect->error;
        }
    }
    function ConsultarProduto($id, $connect) {
        $sql = "SELECT nome, marca, quantidade, preco FROM produtos WHERE id=".$id;
        $res = $connect->query($sql);
        return $res;
    }
    function AlterarProduto($produto, $connect) {
        $sql = " UPDATE funcionarios SET nome='" . 
        $produto->getNome() . "' ,id='" . 
        $produto->getID() . "',quantidade='" . 
        $produto->getQuantidade() ."' WHERE preco=". 
        $produto->getPreco();
        $res = $connect->query($sql);
        
        return $res;
    }
    
}

?>