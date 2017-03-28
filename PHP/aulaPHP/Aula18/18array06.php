<!DOCTYPE html>
<html>

    <head>

        <link rel="stylesheet" href="_css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>


    </head>

    <body>

        <div>
            <pre>



            <?php

                $m = array (array(1,2,3), array(4,5,6), array(7,8,9), 10,"teste");
                print_r($m);

                $m[0][0] = $m [2] [0];

                print_r($m);
            ?>
            </pre>

        </div>

    </body>

</html>
