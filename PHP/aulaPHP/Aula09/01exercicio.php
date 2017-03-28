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

                $ano = (isset($_GET["ano"]) ? ($_GET["ano"] =="" ? date("Y") : $_GET["ano"]) : date("Y"));
                $idade = date("Y") - $ano;
                echo "Voce nasceu em $ano e tem $idade anos.<br/>";

                if ($idade >= 18) {

                    $votar = "Já";
                    $dirigir = "Já";
                }

                else {

                    $votar = "não";
                    $dirigir = "não";
                }

                echo "Com essa idade você $dirigir pode dirigir e $votar pode votar."
            ?>

        </div>

    </body>

</html>
