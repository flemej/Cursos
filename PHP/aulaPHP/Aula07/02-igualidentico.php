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

                $a=3;
                $b="3";

                $r = ($a == $b)?"Sim":"Não";
                echo "As variáveis 'a' e 'b' são iguais? ".$r."<br />";

                $r = ($a === $b)?"Sim":"Não";
                echo "As variáveis 'a' e 'b' são iguais? ".$r;

            ?>
        </div>

    </body>

</html>
