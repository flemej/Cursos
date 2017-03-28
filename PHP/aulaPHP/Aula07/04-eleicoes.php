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

                $anoNasc = $_GET["an"];
                $anoAtual = 2017;
                $idade = ($anoAtual - $anoNasc);
                echo "Quem nasceu em $anoNasc tem $idade anos de idade.<br/>";

                $tipo = (($idade >=0 && $idade <=15)?"Espere chegar aos 16 anos para poder votar!":(($idade >= 16 && $idade <=18) or ($idade >=65))?"O seu voto é facultativo!":"O seu voto é obrigatório!");
                echo $tipo;

            ?>
        </div>

    </body>

</html>
