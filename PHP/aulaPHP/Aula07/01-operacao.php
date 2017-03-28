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

                $n1 = $_GET["a"];
                $n2 = $_GET["b"];
                $tipo = $_GET["op"];
                echo "O valor passado para 'n1' é ".$n1." e o valor passado para 'n2' é ".$n2."<br />";
                $r = $tipo=="s"?$n1+$n2:$n1*$n2;
                echo "O resultado é $r";

            ?>
        </div>

    </body>

</html>
