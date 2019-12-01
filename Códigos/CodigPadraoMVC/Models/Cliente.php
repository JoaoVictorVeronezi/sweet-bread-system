<?php

class Cliente {
    //atributos da classe Cliente
    private $cpf;
    private $nome;
    private $telefone;
    private $email;

    //Construtor que recebe como parametro os valores dos atributos
    function __construct($ccpf, $cnome, $ctelefone, $cemail) {
        $this->cpf = $ccpf;
        $this->nome = $cnome;
        $this->telefone = $ctelefone;
        $this->email = $cemail;
    }

    function getCpf() {
        return $this->cpf;
    }
    function getNome() {
        return $this->nome;
    }
    function getTelefone() {
        return $this->telefone;
    }
    function getEmail() {
        return $this->email;
    }
}
?>