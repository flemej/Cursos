<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="utf-8" />
        <title>Operações Aritméticas</title>
        <link rel="stylesheet" href="_css/estilo.css">

        <style>

            h2 {
                font: 15pt Arial;
                color: #243173;
                font-weight: bold;
            }

        </style>

    </head>

    <body>

        <div>

            <?php

                $v1= $_GET["x"];
                $v2= $_GET["y"];

                echo "<h2>Valores recebidos: ".$v1." e ".$v2."</h2><br/>";
                echo "O valor absoluto de $v2 é ".abs($v2)."</br>";
                echo "O valor de $v1<sup>$v2</sup> é " . pow($v1,$v2)."<br/>";
                echo "A raiz de $v1 é ".sqrt($v1)."<br/>";
                echo "O valor de $v2 arredondado é ".round($v2)."<br/>"; //ceil ou floor substituem round
                echo "A parte inteira de $v2 é ".intval($v2)."<br />";
                echo "O valor de $v1 em moeda é R$".number_format($v1, 2)."<br />";
                echo number_format(1,2);

            ?>

        </div>

    </body>

</html>
