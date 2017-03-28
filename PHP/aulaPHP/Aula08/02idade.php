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

                $nome = isset($_GET["nome"]) ? ($_GET["nome"]=="" ? "[Nome não Informado]" : $_GET["nome"]) : "[GET Não Informado]";
                $ano = isset($_GET["ano"]) ? ($_GET["ano"]=="" ? date("Y") : $_GET["ano"]) : date("Y");
                $sexo = isset($_GET["sexo"]) ? ($_GET["sexo"]=="" ? "[Sexo não informado]" : $_GET["sexo"]) : "[GET não Informado]";

                $idade = (date("Y") - $ano);
                echo "$nome é $sexo e tem $idade anos.";

            ?>

            <a href="02exercicio.html">Voltar</a>

        </div>


    </body>

</html>
