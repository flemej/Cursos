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

                $num = isset($_GET["num"]) ? ($_GET["num"]=="" ? "0" : $_GET["num"]) : "0";
                $operacao = isset($_GET["operacao"]) ? (($_GET["operacao"]=="") ? "1" : $_GET["operacao"]) : "1";

                switch ($operacao) {
                    case 'D':
                        $res = $num *2;
                        break;

                    case 'C':
                        $res = pow($num, 3);
                        break;

                    case 'R':
                        $res = sqrt($num);
                        break;

                }

                echo "<fieldset><legend>Resultado</legend>";
                echo "O resultado da operacao solicitada é $res <br/>";
                echo "</fieldset>";

            ?>

            <a href ="01exercicio.html" class="botao">Voltar</a>

        </div>

    </body>

</html>
