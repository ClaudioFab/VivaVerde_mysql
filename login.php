<?php

//Inicia a sessão php
session_start();

//Verifica se o usuário ja está logado
if (isset($_SESSION["usuario_id"])) {
    header("Location: painel.php");
    exit;
}

//Verifica se houver erro na tentativa de login
$erro = isset($_GET["Erro!"]);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Viva Verde</title>
    <!-- Para conectar ao bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!-- Para colocar icones -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body>
    <main>
        <!-- Modal do login -------------------------------------------------------->
        <section class="container ">
            <div class="row">
                <div class="col-6" justify-content: center;>
                    <form action="autenticar.php" method="POST">

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" aria-describedby="emailHelp" required>
                            <div id="emailHelp" class="form-text">Não compartilhamos esse bagulho.</div>
                        </div>


                        <div class="mb-3">
                            <label class="form-label">Senha</label>
                            <input type="password" class="form-control" name="senha" required>
                        </div>

                        <button type="submit" class="btn btn-success theme-primary d-flex justify-content-center">Conectar</button>
                        <br><br>

                    </form>
                    <button class="btn btn-danger" onclick="window.location.href='index.html'">Voltar</button>

                </div>

            </div>

        </section>
        <!-- ----------------------------------------------------------------------->



















    </main>


    <!-- Para conectar ao bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
</body>

</html>