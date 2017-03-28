<!DOCTYPE html>
<html>

    <head>

        <title>Curso de PHP - CursoemVideo.com</title>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="_css/estilo.css"/>

    </head>

    <body>

        <div>

            <form  action="03exercicio02.php" method="get">

                <fieldset><legend>Incremento</legend>

                    <label for="iini">Inicio:<input type="number" name="ninicio" id="iini" min="1" max="1000"></label><br/>
                    <label for="ifim">Final: <input type="number" name="nfim" id="ifim" min="1" max="1000"></label><br/>
                    <label for="iincr">Incremento: </label>
                    <select name="nincr" id="iincr">

                        <?php

                            $n = 1;

                            while($n<=5){

                                echo "<option name='$n'>$n</option>";
                                $n++;

                            }

                        ?>

                    </select>

                </fieldset>

                <input type="submit" value="Enviar" class="botao">

            </form>

        </div>

    </body>

</html>
