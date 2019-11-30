<?php

class Funcionario {

    private $nome;
    private $cargo;
    private $cpf;
    private $login;
    private $senha;

    function construct(){}

    //Funcao responsável pela conexao direta com o banco.
    function getConnectDB() {
        if ($this->connectDB == NULL) {
            $this->connectDB = mysqli_connect($this->servername,$this->username,$this->password,$this->bd);
        }
        if (!$this->connectDB) {
            echo "Erro com o banco de dados". $connectDB->connect_erro;
            exit;
        }
    }
}
?>