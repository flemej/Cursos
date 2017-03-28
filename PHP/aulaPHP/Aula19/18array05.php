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

                    $arr = array("3", "2", "1", "0");
                    print_r($arr);
                    echo "Array original<br />";

                    asort($arr);
                    print_r($arr);
                    echo "Array ordenado menor para o maior sem mexer no indice<br />";

                    $arr = array("3", "2", "1", "0");
                    print_r($arr);
                    echo "Array original<br />";

                    arsort($arr);
                    print_r($arr);
                    echo "Array ordenado maior para menor sem mexer no indice<br />";



                ?>

            </pre>

        </div>

    </body>

</html>
