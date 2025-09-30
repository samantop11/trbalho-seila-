<?php

// Configurações do banco
$host    = "localhost";   
$usuario = "root";       
$senha   = "";          
$banco   = "sa213";     

$conexao = mysqli_connect($host, $usuario, $senha, $banco);

if (!$conexao) {
    die("Erro ao conectar: " . mysqli_connect_error());
}

mysqli_set_charset($conexao, "utf8");
?>