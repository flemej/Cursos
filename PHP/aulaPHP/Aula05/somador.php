<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="utf-8" />
        <title>Operações Aritméticas</title>
        <link rel="stylesheet" href="_css/estilo.css">

    </head>

    <body>

        <div>

            <?php

                $n1 = $_GET["a"];
                $n2 = $_GET["b"];

                $m = ($n1 + $n2) / 2;

                echo "<h2>Valores recebidos: ".$n1." e ".$n2."</h2>";

                echo "A soma vale ". ($n1 + $n2)."<BR />";
                echo "A subtração vale ". ($n1 - $n2)."<BR />";
                echo "A multiplicação vale ". ($n1 * $n2)."<BR />";
                echo "A divisão vale ". ($n1 / $n2)."<BR />";
                echo "O modulo vale ". ($n1 % $n2)."<BR />";
                echo "A media vale ". $m."<BR />";

            ?>

        </div>

    </body>

</html>
