<?php

class Produto {
    //atributos da classe Produto
    private $id;
    private $nome;
    private $marca;
    private $quanti;
    private $preco;

    //Construtor que recebe como parametro os valores dos atributos
    function __construct($pid, $pnome, $pmarca, $pquanti, $$ppreco) {
        $this->id = $pid;
        $this->nome = $pnome;
        $this->marca = $pmarca;
        $this->quanti = $pquanti;
        $this->preco = $ppreco;
    }

    function getID() {
        return $this->id;
    }
    function getNome() {
        return $this->nome;
    }
    function getMarca() {
        return $this->marca;
    }
    function getQuantidade() {
        return $this->quanti;
    }
    function getPreco() {
        return $this->preco;
    }
}
?>