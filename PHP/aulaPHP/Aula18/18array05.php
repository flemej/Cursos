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

                $cad= array ("nome"=>"Ana","idade"=>"32", "peso"=>"78.5");
                print_r($cad);
                echo "<br />";
                $cad["fuma"]=true;
                print_r($cad);
                echo "<br />";

                foreach ($cad as $k => $c) {
                    echo "O campo $k possui o conteudo $c<br />";
                }
            ?>

        </div>

    </body>

</html>
