<!DOCTYPE html>
<html>

    <head>

        <link rel="stylesheet" href="_css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>

    </head>

    <body>

        <div class="">


            <form action="02exercicio2.php" method="get">

                <?php

                    $i = 1;

                    while ($i <= 5) {

                        echo "Valor $i: <input type='number' name='v$i' value='0' min='0' max='100'/><br/>";
                        $i++;

                    }

                 ?>

                <input type="submit" value="Enviar" class="botao"/>

            </form>

        </div>

    </body>

</html>
