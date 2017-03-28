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

                    $v= array (0=>"A", 1=>"J", 2=>"M", 3=>"X", 4=>"K");
                    var_dump($v);
                    echo "<br />";
                    echo "Total de elementos obtidos por count(): ".count($v);
                    echo "<br />";


                ?>

            </pre>

        </div>

    </body>

</html>
