<!DOCTYPE html>
<html>

    <head>

        <link rel="stylesheet" href="_css/estilo.css">
        <meta charset="utf-8" />
        <title>Curso de PHP - CursoemVideo.com</title>

    </head>

    <body>

        <div>

            <fieldset><legend>Resultado</legend>

                <?php

                    $i= (isset($_GET["ninicio"]) ? ($_GET["ninicio"]!=="" ? $_GET["ninicio"] : "1") : "1");
                    $f= (isset($_GET["nfim"]) ? ($_GET["nfim"]!=="" ? $_GET["nfim"] : "1") : "1");
                    $incr = (isset($_GET["nincr"]) ? ($_GET["nincr"]!=="" ? $_GET["nincr"] : "1") : "1");

                    echo "Inicio: $i<br />";
                    echo "Fim: $f <br />";
                    echo "Incremento: $incr<br />";

                    while ($i < $f) {

                        echo "$i<br/>";
                        $i = $i + $incr;

                    }

                    while ($i > $f) {

                        echo "$i<br/>";
                        $i = $i - $incr;

                    }

                ?>

            </fieldset>

            <a href="03exercicio01.php" class="botao">Voltar</a>

        </div>

    </body>

</html>
