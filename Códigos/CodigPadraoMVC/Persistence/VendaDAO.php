<?php

class VendaDAO {
    //fazendo dessa maneira, entretanto, posso chamar na model produto um metódo que ja faça essa
    //decrementação
    
    function canBuy($idprod, $qntProd, $connect) {
        //selecionar a qualidade para ver se ha a quantidade necessria
        $query = " SELECT quantidade FROM produtos WHERE id=".$idprod;
        $quantidade = $connect->query($query);
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

    function salvarVenda($idProd, $qntProd, $idVendedor, $idCliente,$connect) {
        $sql = "INSERT INTO vendas (idprod, qntprod, idvendedor, idcliente) VALUES ($idProd, $qntProd, $idVendedor, $idCliente)";
        if ($connect->query($sql)) {
            return true;
        }
        return false;
    }
}


?>