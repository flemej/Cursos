<!DOCTYPE html>
<html>

    <head>

        <link rel="stylesheet" href="_css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>

    </head>

    <body>

        <div>

            <form action="02tabuada.php" method="get">

                <fieldset><legend>Tabuada</legend>

                    <select name="num">

                        <?php

                            $qtd = 10;

                            for ($i=1; $i<=$qtd; $i++) {

                                echo "<option>$i</option><br/>";

                            }

                         ?>

                    </select>

                </fieldset>

                <input type="submit" class="botao" value="Tabuada"/>

            </form>

        </div>

    </body>

</html>
