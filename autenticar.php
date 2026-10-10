<?php

    session_start();

    if ($_SERVER["REQUEST_METHOD"] !== "POST") {
        header("Location: login.php");
        exit;
    }

    $emai  = trim($_POST["email"] ?? "");
    $senha = $_POST["senha"] ?? "";

    require "conexao.php";

    $stmt = mysqli_prepare($conexao, "SELECT idContato, nome, senha_hash FROM usuario where email = ? LIMIT 1");

    mysqli_stmt_bind_param(
        $stmt,
        "s",
        $email
    );

    $resultado = mysqli_stmt_get_result($stmt);

    $usuario = mysqli_fetch_assoc($resultado);

    if($usuario && password_verify($senha, $usuario["senha_hash"])){
        session_regenerate_id(true);

        $_SESSION["usuario_id"] = $usuario["idusuario"];
        $_SESSION["usuario_nome"] = $usuario["nome"];
        header("Location: login.php");
        exit;

    }

    header("Location: login.php?erro=1");
    exit;

?>