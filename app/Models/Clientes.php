<?php 

namespace Projeto\Models;


    class Clientes{

protected \PDO $conexao;

        public function __construct()
        {
            $servidor = "localhost";
            $banco = "pizzaria";
            $usuario = "root";
            $senha = "";

           $dsn = "mysql:host={$servidor}; dbname={$banco}";

            $this->conexao = new \PDO($dsn, $usuario, $senha);

            var_dump($this->conexao);

        }
    }