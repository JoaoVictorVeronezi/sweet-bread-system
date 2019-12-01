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
    function ConsultarProduto($id, $connect) {
        $sql = "SELECT id, nome, marca, quantidade, preco FROM produtos WHERE id=".$id;
        $res = $connect->query($sql);
        return $res;
    }
    function DeletarProduto($id, $connect) {
        $sql ="DELETE FROM produtos WHERE id=".$id;
        if ($connect->query($sql) === TRUE) {
            echo "<script> alert('Produto removido!')</script>";
        } else {
            echo "Erro na remoção: " . $connect->error;
        }
    }
    function AlterarProduto($produto, $connect) {
        $sql = " UPDATE produtos SET nome='" . 
        $produto->getNome() . "' ,marca='" . 
        $produto->getMarca() . "',preco='" . 
        $produto->getPreco() ."' WHERE id=". 
        $produto->getID();
        $res = $connect->query($sql);
        
        return $res;
    }
    
}

?>