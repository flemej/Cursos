<!DOCTYPE html>
<html>

    <head>

        <link rel="stylesheet" href="_css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>

    </head>

    <body>

        <div class="">


                <?php

                    $qtdpar = count($_GET);
                    $i = 1;

                    while ($i <= $qtdpar) {

                        $v = "num" . $i;
                        $$v = isset($_GET["v".$i])?$_GET["v".$i] : 0;
                        $i++;
                    }

                    $i = 1;

                    while ($i <= 5) {
                        $v = "num" . $i;
                        echo "Valor $i : " . $$v . "<br/>";
                        $i++;
                    }

                ?>

                <a href="02exercicio1.php" class="botao">Voltar<a/>

            </form>

        </div>

    </body>

</html>
