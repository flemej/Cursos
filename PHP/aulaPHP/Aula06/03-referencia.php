<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="utf-8" />
        <title>Referências</title>
        <link rel="stylesheet" href="_css/estilo.css">

    </head>

    <body>

        <div>

            <?php

                $a = 3;
                $b = &$a;
                $b += 5;
                echo "A variável 'a' vale $a"."<br />";
                echo "A variável 'b' vale $b"."<br />";

            ?>

        </div>

    </body>

</html>
