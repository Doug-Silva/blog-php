<?php

$mysql = new mysqli('localhost:3307', 'root', '', 'blog');
$mysql->set_charset('utf8');

if ($mysql == FALSE) {
    echo "Erro na conexão";
}