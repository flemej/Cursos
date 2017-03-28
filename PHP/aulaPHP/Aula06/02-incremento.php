<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="utf-8" />
        <title>Incremento/comentários</title>
        <link rel="stylesheet" href="_css/estilo.css">

    </head>

    <body>

        <div>

            <?php

                /* uso de operadores de incremento e decremento */

                $atual = $_GET["aa"]; // recebe parametro da url

                #exibe resultado

                echo "O ano atual é ".$atual." e o ano anterior é ".--$atual."<br/>";

                $a = 3;
                $b = $a;
                $b +=5;
                echo $a."<br />";
                echo $b."<br />";

                echo "<br/>";

                $a = 3;
                $b = &$a;
                $b = 5;
                echo $a."<br />";
                echo $b."<br />";

            ?>

        </div>

    </body>

</html>
