<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = 'root';
$banco = 'frota_ferroveria';

$conexao = new mysqli($servidor, $usuario, $senha, $banco);

if ($conexao->cennct_error)  {
    die('Falha na conexão: ' . $conexao->connect_error);
}

$conexao->set_charset('utf8mb4');