<!DOCTYPE html>
<html>

    <head>

        <link rel="stylesheet" href="_css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>

    </head>

    <body>

        <div>

            <fieldset><legend>Tabuada</legend>

                <?php

                    $val = isset($_GET["num"]) ? ($_GET["num"]!=="" ? $_GET["num"] : '1') : "1";

                    for ($i=1; $i<=10; $i++) {

                        echo "$val x $i = ".($val * $i)."<br/>";

                    }

                ?>

            </fieldset>

            <a href="javascript:history.go(-1)" class="botao">Voltar</a>

        </div>

    </body>

</html>
