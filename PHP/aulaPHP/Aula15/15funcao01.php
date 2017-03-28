<!DOCTYPE html>
<html>

    <head>

        <link rel="stylesheet" href="_css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>

    </head>

    <body>

        <div>

            <?php

                #require "funcoes2.php";  obrigatorio
                #include "funcoes2.php";  não obrigatorio
                #require_once "funcoes2.php";  obrigatorio / carrega apenas uma vez
                #include_once "funcoes2.php";  não obrigatorio / carrega apenas uma vez

                require_once "funcoes.php"; 

                echo "<h1>Testando novas funçoes</h1>";
                ola();
                mostraValor(10);
                echo "<h2>Finalizando programa</h2>";

            ?>

        </div>

    </body>

</html>
