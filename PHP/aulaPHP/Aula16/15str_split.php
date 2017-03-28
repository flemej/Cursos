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

                $site = "Curso em Video";
                $vetor = str_split($site);
                print_r($vetor);
                echo "<- Coloca cada letra da frase em um indice de vetor";


            ?>

        </div>

    </body>

</html>
