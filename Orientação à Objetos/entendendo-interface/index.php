<?php

interface Database {
    public function listarProdutos();
    public function adicionarProdutos();
    public function alterarProdutos();
}

class MysqlDB implements Database {
    public function listarProdutos()
    {
        
    }

    public function adicionarProdutos()
    {
        echo "Adicionando com MySQL";
    }

    public function alterarProdutos()
    {
        
    }
}

class oracleDB implements Database {
    public function listarProdutos()
    {
        
    }

    public function adicionarProdutos()
    {
        echo "Adicionando com Oracle";
    }

    public function alterarProdutos()
    {
        
    }
}

$db = new oracleDB();
$db = adicionarProdutos();