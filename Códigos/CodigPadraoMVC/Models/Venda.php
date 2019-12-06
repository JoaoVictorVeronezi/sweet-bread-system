<?php

class Venda {
    private $idvendedor;
    private $idproduto;
    private $qntproduto;
    private $idCliente;

    function __construct($idvend, $idprod, $qntprod, $idcli) {
        $this->idvendedor = $idvend;
        $this->idproduto = $idprod;
        $this->qntproduto= $qntprod;
        $this->idCliente = $idcli;
    }

    function getidvendedor() {
        return $this->idvendedor;
    }
    function getidproduto() {
        return $this->idproduto;
    }
    function getqntproduto() {
        return $this->qntproduto;
    }
    function getidCliente() {
        return $this->idCliente;
    }
}

?>