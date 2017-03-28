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

                $frase = "Eu vou estudar PHP";

                $c = str_word_count($frase,0);
                print_r($c);
                echo "<- Conta quantidade de palavras<br />";

                $c = str_word_count($frase,1);
                print_r($c);
                echo "<- transforma o texto em um array<br />";

                $c = str_word_count($frase,2);
                print_r($c);
                echo " <- Mostra posição inicial de cada palavra<br />";

            ?>

        </div>

    </body>

</html>
