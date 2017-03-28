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

                $dia = isset($_GET["ds"]) ? ($_GET["ds"]=="" ? 1 : $_GET["ds"]) : 1;

                switch ($dia) {
                    case 2:
                    case 3:
                    case 4:
                    case 5:
                    case 6:
                        echo "Levanta e vai estudar! :)";
                        break;

                    case 7:
                    case 1:
                        echo "Descanse, pequeno gafanhoto! ;)";
                        break;

                    default:
                        echo "Dia da semana inválido";

                }

            ?>

            <br/> <a href="javascript:history.go(-1)" class="botao">Voltar</a>


        </div>

    </body>

</html>
