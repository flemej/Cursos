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

                $frase = "Curso em video";
                echo "$frase<br />";
                $sub = substr($frase, 0, 5);
                echo $sub."<br />";
                $sub = substr($frase, 6);
                echo $sub."<br />";
                $sub = substr($frase, 6,2);
                echo $sub."<br />";
                $sub = substr($frase, -5);
                echo $sub."<br />";
                $sub = substr($frase, -5,2);
                echo $sub."<br />";




            ?>

        </div>

    </body>

</html>
