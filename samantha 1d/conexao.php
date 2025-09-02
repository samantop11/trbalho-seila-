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
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css"> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h3></h3>
    
</body>
</html>