<?php

include 'config.php';

class Artigo
{
    private mysqli $mysql;

    public function __construct(mysqli $mysql)
    {
        $this->mysql = $mysql;
    }

    public function exibirTodos(): array
    {
        $resultado = $this->mysql->query('SELECT id, titulo, conteudo FROM artigos');

        return $resultado->fetch_all(MYSQLI_ASSOC);
    }
}

