<?php
// Classe destinada a conexão com o banco de dados
class Connection {
    //Definição de todos os atributos do banco de dados
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $bd = "bd_test";
    private $connectDB = NULL;
    
    //Construtor
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