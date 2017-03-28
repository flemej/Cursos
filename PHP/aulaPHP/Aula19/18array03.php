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

                    $arr = array("A", "J", "M", "X", "K");
                    print_r($arr);
                    echo "<br />";

                    array_push($arr, 7);
                    print_r($arr);
                    echo "Adicionado o elemento 7 no array (final do array)<br />";

                    array_pop($arr);
                    print_r($arr);
                    echo "Utilizado array_pop para desalocar o elemento 7 (final do array)<br />";

                    array_unshift($arr, "Z");
                    print_r($arr);
                    echo "Adicionado o elemento Z no array (inicio do array)<br />";

                    array_shift($arr);
                    print_r($arr);
                    echo "Eliminado o elemento Z no array (inicio do array)<br />";

                ?>

            </pre>

        </div>

    </body>

</html>
