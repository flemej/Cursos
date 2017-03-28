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
                echo "A raiz quadrada de ".$_GET['v']. " é ".number_format(sqrt($_GET["v"]),2);

            ?>

            <a href="01exercicio.html">Voltar</a>

        </div>

    </body>

</html>
