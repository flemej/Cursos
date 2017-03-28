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

                $txt = "   ABC    ";
                $txtp = "xxxABCxxxx";
                echo "$txtp<br />";

                echo strlen($txt)." <- strlen";
                echo "<br />";
                echo strlen(trim($txt))."<- strlen(trim())";
                echo "<br />";
                echo strlen(ltrim($txt))."<- strlen(ltrim())";
                echo "<br />";
                echo strlen(rtrim($txt))."<- strlen(rtrim())";
                echo "<br />";

            ?>

        </div>

    </body>

</html>
