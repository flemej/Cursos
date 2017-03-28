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

                function soma($a, $b) {

                    return($a + $b);
                }

                $x = 10;
                $y = 20;
                $res = soma($x,$y);

                echo "<p>A soma entre $x e $y é $res</p>";

            ?>

        </div>

    </body>

</html>
