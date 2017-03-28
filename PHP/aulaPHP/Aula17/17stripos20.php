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

                $frase = "Estou aprendendo PHP";
                echo "$frase<br />";
                $pos = stripos($frase, "php");
                echo "A string foi encontrada na posição $pos (inicia da posição zero, não é case sensitive)";

            ?>

        </div>

    </body>

</html>
