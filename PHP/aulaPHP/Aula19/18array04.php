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

                    $arr = array("3", "5", "8", "2");
                    print_r($arr);
                    echo "Array original<br />";

                    sort($arr);
                    print_r($arr);
                    echo "Array ordenado menor para o maior<br />";

                    rsort($arr);
                    print_r($arr);
                    echo "Array ordenado menor para o maior<br />";

                ?>

            </pre>

        </div>

    </body>

</html>
