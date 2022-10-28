<?php

class banco
{

    public $con;
    public $users = array();
    public $passwords  = array();

    function connect()
    {
        try {
            $this->con = new PDO("mysql:host=localhost;dbname=filmes", 'root', '');
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    function selectLogin()
    {
        try {
            $this->connect();
            $sql = "SELECT * FROM usuarios";
            $result = $this->con->query($sql)->fetchAll();
            if ($result == false) {
                echo "Não foi possível achar o usuario";
            } else {
                foreach ($result as $index => $row) {
                    $this->user[$index] = $row['usuario'];
                    $this->senha[$index] = $row['senha'];
                }
            }
        } catch (PDOException $e) {
            echo "Erro, falha na tentativa de ler os dados do banco.";
        };
        $this->con = null;
    }

    function inserir($nome, $genero, $diretor)
    {
        $this->connect();

        $sql = "INSERT INTO filme (nome,genero,diretor) VALUES ('$nome','$genero','$diretor') ";
        $this->con->exec($sql);
        echo "Inserido com sucesso";

        $this->con = null;
    }

    function selct()
    {
        try {
            $this->connect();
            $sql = "SELECT * FROM filme";
            $result = $this->conn->query($sql)->fetchAll();
            if ($result == false) {
                echo "Sem filmes cadastrados :(";
            } else {
                foreach ($result as $row) {
                    echo $row['nome'] . ' - ' . $row['genero'] . ' - ' . $row['diretor'] . '<hr>';
                }
            }
        } catch (PDOException $e) {
            echo "Erro, falha na tentativa de ler os dados do banco.";
        };
        $this->con = null;
    }
}
$db = new banco();
