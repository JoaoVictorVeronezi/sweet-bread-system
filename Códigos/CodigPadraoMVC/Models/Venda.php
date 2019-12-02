<?php

class Venda {
    private $vendedor;
    private $idproduto;
    private $qntproduto;
    private $valor;


    function __construct($vend, $id, $qntprod) {
        $this->vendedor = $vend;
        $this->idproduto = $id;
        $this->qntproduto= $qntprod;
    }


    function getVendedor() {
        return $this->vendedor;
    }
    function getIdProduto() {
        return $this->idproduto;
    }
    function getQntProduto() {
        return $this->qntproduto;
    }
}

?>