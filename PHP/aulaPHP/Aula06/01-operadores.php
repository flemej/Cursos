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

                $preco = $_GET["p"];
                echo "O preço do produto é R$ ".number_format($preco,2,",",".")."<br/>";

                $preco -= ($preco * .10);
                //    $preco = $preco + ($preco * .10);
                echo "O preço com desconto de 10% é R$ ".number_format($preco,2,",",".")."<br/>";

            ?>

        </div>

    </body>

</html>
