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

                $frase = "Estou aprendendo PHP no Curso em video PHP";
                echo "$frase<br />";
                $pos = substr_count($frase, "HP");
                echo "Existem $pos ocorrencias da string informada";

            ?>

        </div>

    </body>

</html>
