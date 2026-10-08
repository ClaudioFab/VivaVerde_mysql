<?php
$conexao = mysqli_connect("localhost", "root", "", "VivaVerde");

if (!$conexao) {
    die("Erro ao conectar ao banco de dados.");
}

/* Configura caracteres especiais */
mysqli_set_charset($conexao,"utf8mb4")



?>