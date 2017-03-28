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

                $n = isset($_GET["val"]) ? ($_GET["val"]!=="" ? $_GET["val"] : "1") : "1";
                echo "<p>Tabuada do $n</p>";


                $c = 1;

                do {

                    echo "$n x $c = " . $n * $c ."<br/>";

                    $c++;

                } while ($c <= 10);

            ?>

            <br/><a href="12tabuada03.html" class="botao">Voltar</a>

        </div>


    </body>

</html>
