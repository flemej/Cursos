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

                function soma() {

                    $v = func_get_args();
                    $t = func_num_args();
                    $s=0;
                    $string ="";

                    for ($i=0; $i<$t; $i++) {

                        $s += $v[$i];

                        $string = ($string=="" ? $v[$i] :  $string . " + " . $v[$i] );
                        echo $i==0 ? "": "$string = $s<br />";

                    }

                    return($s);
                }

                $res = soma(10, 20, 30, 40, 5, 55, 70, 80, 90, 100);

                echo "<p>A soma entre os valores informados é $res</p>";

            ?>

        </div>

    </body>

</html>
