<!DOCTYPE html>
<html>
    <head>

        <link rel="stylesheet" href="_css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>

        <style>
            .verde {
                color: #1d7326;
            }

            .amarelo {
                color: #cfff2e;
            }

            .azul {
                color: #400deb;
            }

            .rosa {
                color: #b824a9;
            }

            .marron {
                color: #4d340f;
            }

            .vermelho {
                color: #fb0008;
            }


        </style>

    </head>

    <body>

        <div>

            <?php

                $reg = isset($_GET["est"]) ? ($_GET["est"]=="" ? "0" : $_GET["est"]) : "0";

                switch ($reg) {
                    case 'SD':
                        $res = "Região Sudeste";
                        echo "<fieldset>Você pertence a <span class='verde'>$res</span></fieldset>";
                        break;

                    case 'SU':
                        $res = "Região Sul";
                        echo "<fieldset>Você pertence a <span class='amarelo'>$res</span></fieldset>";
                        break;

                    case 'CO':
                        $res = "Região Centro Oeste";
                        echo "<fieldset>Você pertence a <span class='azul'>$res</span></fieldset>";
                        break;

                    case 'NO':
                        $res = "Região Norte";
                        echo "<fieldset>Você pertence a <span class='rosa'>$res</span></fieldset>";
                        break;

                    case 'NE':
                        $res = "Região Nordeste";
                        echo "<fieldset>Você pertence a <span class='marron'>$res</span></fieldset>";
                        break;

                    default:
                        echo "<fieldset><span class='vermelho'>Região inválida</span></fieldset>";

                }

            ?>

            <a href="03exercicio.html" class="botao">Voltar</a>

        </div>

    </body>

</html>
