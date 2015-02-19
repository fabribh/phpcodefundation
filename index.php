<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8" />

        <title>Meu Site</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css"/>

        <!-- Personalização CSS para o navbar -->
        <link rel="stylesheet" href="css/navbar.css"/>

    </head>

    <body>
        <div class="container">

            <!-- Incluindo o menu -->
            <?php require_once "menu.php"; ?>

            <!-- Incluindo o Conteúdo -->
            <?php
            if(isset($_GET['arquivo'])) {

                #Aqui valida se o usuário se o arquivo existe...
                if (file_exists(__DIR__ . "/" . $_GET['arquivo'])) {
                    require_once $_GET['arquivo'];
                }else {
                    #Se o arquivo não existir ele chama a página principal
                    require_once "home.php";
                }
            }else {
                #Ele cairá aqui na primeira requisição, que acessará o index sem pararametro...
                require_once "home.php";
            }
            ?>

        </div>

        <!-- Incluindo rodapé -->
        <?php require_once "rodape.php"; ?>

        <!-- Inclusão biblioteca jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

        <!-- Bootstrap JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </body>

</html>