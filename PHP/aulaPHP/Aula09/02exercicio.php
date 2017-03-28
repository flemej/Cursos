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
                echo "Você nasceu em $ano.<br/>";

                if ($idade<16) {
                    $vota = "ainda não pode votar";
                    $dirige ="ainda não pode dirigir";
                }
                elseif (($idade >=16 && $idade <18) || ($idade > 65)){
                    $vota = "tem o voto facultativo";
                    $dirige = "pode ter a habilitação temporária";
                }
                else {
                    $vota = "tem o voto obrigatório";
                    $dirige = "pode ter a habilitação comum";
                }

                echo "Quem nasceu em $ano tem $idade anos, $vota e $dirige.";

            ?>

            <a href="02exercicio.html">Voltar</a>

        </div>

    </body>

</html>
