<?php

class Funcionario {
    //atributos da classe funcionario
    private $nome;
    private $cargo;
    private $cpf;
    private $login;
    private $senha;

    //Construtor que recebe como parametro os valores dos atributos
    function __construct($vnome, $vcargo, $vcpf, $vlogin, $vsenha) {
        $this->nome = $vnome;
        $this->cargo = $vcargo;
        $this->cpf = $vcpf;
        $this->login = $vlogin;
        $this->senha = $vsenha;
    }

    function getNome() {
        return $this->nome;
    }
    function getCargo() {
        return $this->cargo;
    }
    function getCpf() {
        return $this->cpf;
    }
    function getLogin() {
        return $this->login;
    }
    function getSenha() {
        return $this->senha;
    }
}
?>