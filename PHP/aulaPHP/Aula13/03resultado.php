<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="_css/estilo.css"/>

    </head>

    <body>

        <div>

            <form action="03primo.php">

                <fieldset><legend>Números Primos</legend>

                    <?php

                        $ndig = isset($_GET["ndig"]) ? ($_GET["ndig"]!=="" ? $_GET["ndig"] : "1") : "1";

                        echo "Analisando o número $ndig<br/>";

                        $totnum = 0;
                        $multiplos = "";

                        for ($i=1; $i <= $ndig; $i++) {

                            if ($ndig%$i==0) {

                                $multiplos = $multiplos . ($i==1 ? $i : ", $i");
                                $totnum ++;

                            }
                        }


                        echo "Valores múltiplos: $multiplos <br/>";
                        echo "Total de múltiplos: $totnum <br/>";

                        if ($totnum==2) {

                            echo "Resultado: O número $ndig é um número primo!";

                        }
                        else {

                            echo "Resultado: O número $ndig não é um número primo!";

                        }

                    ?>

                </fieldset>

                <input type="submit" value="Voltar" class="botao">

            </form>



        </div>

    </body>

</html>
