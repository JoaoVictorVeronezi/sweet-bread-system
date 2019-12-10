<?php

class VendaDAO {

    function canBuy($idprod, $qntProd, $connect) {
        //selecionar a qualidade para ver se ha a quantidade necessria
        $query = " SELECT quantidade FROM produtos WHERE id=".$idprod;
        $quantidade = $connect->query($query)->fetch_assoc()["quantidade"];
        //var_dump($quantidade);
        if ($qntProd >= $quantidade) {
            return false;
        }
        return true;
    }
    // no controller , caso o returno seja false, retornar erro: falta de estoque
    
    function atualizarQtdProduto($idProd, $qntProd, $connect) {
        $sql = " UPDATE produtos SET quantidade= quantidade - $qntProd WHERE id=".$idProd;
        if($connect->query($sql)) {
            return true;
        }
        return false;
    }
    //salvar venda só salva, caso exista funcionario, cliente e um produto.
    function salvarVenda($idProd, $qntProd, $idVendedor, $idCliente,$connect) {
        $sql = "INSERT INTO vendas (idproduto, qntprod, idvendedor, idcliente) VALUES ($idProd, $qntProd, $idVendedor, $idCliente)";
        if ($connect->query($sql)) {
            return true;
        }
        return false;
    }

    function ConsultarTodosProdutos($connect) {
        $sql = " SELECT nome FROM produtos INNER JOIN vendas ON produtos.id=vendas.idproduto";
        $resultado = $connect->query($sql);
        return $resultado;
    }
    function ConsultarNomeFuncionario($connect) {
        $sql = " SELECT nome FROM funcionarios INNER JOIN vendas ON funcionarios.cpf=vendas.idvendedor";
        $resultado = $connect->query($sql);
        return $resultado;
    }
    function ConsultarNomeCliente($connect) {
        $sql = " SELECT nome FROM clientes INNER JOIN vendas ON clientes.cpf=vendas.idcliente";
        $resultado = $connect->query($sql);
        return $resultado;
    }
    function ConsultarQuantidade($connect) {
        $sql = "SELECT qntprod FROM vendas";
        $resultado = $connect->query($sql);
        return $resultado;
    }
    function ConsultarIDVenda($connect) {
        $sql = "SELECT idvend FROM vendas";
        $res = $connect->query($sql);
        return $res;
    }
    function ConsultarProduto($id, $connect) {
        $sql = "SELECT nome FROM produtos WHERE id=".$id;
        $res = $connect->query($sql);
        return $res;
    }

}

?>