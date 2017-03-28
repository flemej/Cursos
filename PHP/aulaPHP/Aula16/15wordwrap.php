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

                $t = "Aqui tem um texo grande para mostrar o funcionamento da funcao wordwrap";
                $r = wordwrap ($t, 5, "<br />\n", true);
                echo $r;

                #Notas
                # 5 -> numero de caracteres para quebrar
                # "<br />" -> insere quebra de linha visual
                # \n -> insere quebra de linha no codigo
                # true/false -> quebra ou não palavras grandes ao meio

            ?>



        </div>

    </body>

</html>
