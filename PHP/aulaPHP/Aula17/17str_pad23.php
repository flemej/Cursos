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

                $nome = "Justino";
                $novo = str_pad($nome,10," ",STR_PAD_RIGHT);
                echo "O $novo é muito esforcado<br>";
                $novo = str_pad($nome,10," ",STR_PAD_BOTH);
                echo "O $novo é muito esforcado<br>";
                $novo = str_pad($nome,10," ",STR_PAD_LEFT);
                echo "O $novo é muito esforcado<br>";

            ?>

        </div>

    </body>

</html>
