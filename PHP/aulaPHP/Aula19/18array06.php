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

                    $arr = array(2=>"A", 5=>"J", 0=>"M", 3=>"X", 4=>"K");
                    print_r($arr);
                    echo "Array original<br />";

                    ksort($arr);
                    print_r($arr);
                    echo "Array ordenado menor para o maior pelo indice<br />";

                    $arr = array(2=>"A", 5=>"J", 0=>"M", 3=>"X", 4=>"K");
                    print_r($arr);
                    echo "Array original<br />";

                    krsort($arr);
                    print_r($arr);
                    echo "Array ordenado maior para o menor pelo indice<br />";


                ?>

            </pre>

        </div>

    </body>

</html>
