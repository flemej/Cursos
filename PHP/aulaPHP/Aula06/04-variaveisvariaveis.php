<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="utf-8" />
        <title>Variaveis Variáveis</title>
        <link rel="stylesheet" href="_css/estilo.css">

    </head>

    <body>

        <div>

            <?php

                $x = "abc";
                $$x = "def";
                echo "O conteudo da variavel 'x' é ".$x."<br/>";
                echo "A variável 'abc' criada recebeu o valor '".$abc."'<br />";


            ?>

        </div>

    </body>

</html>
