<!DOCTYPE html>
<html>

    <head>

        <link rel="stylesheet" href="_css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>

        <?php

            $nota1 = (isset($_GET["n1"]) ? ($_GET["n1"] =="" ? 0 : $_GET["n1"]) : "0");
            $nota2 = (isset($_GET["n2"]) ? ($_GET["n2"] =="" ? 0 : $_GET["n2"]) : "0");

            $media = ($nota1 + $nota2) / 2;

            if ($media <=4.9) {
                $condicao = "Reprovado";

            }

            elseif ($media >=5 and $media <=6.9) {
                $condicao = "Recuperação";

            }

            else {
                $condicao = "Aprovado";
            }


        ?>

        <style>

            span.media {
                color: #db1550;
            }

            span.reprovado {
                color: #e81724
            }

            span.recuperacao {
                color: #f2e910;
            }

            span.aprovado {
                color: #24da3c;
            }


        </style>

    </head>

    <body>

        <div>
            <?php

                echo "A média entre <span class='media'>$nota1</span> e <span class = 'media'>$nota2</span> é igual a <span class = 'media'>$media</span><br/>";

                if ($condicao == "Reprovado") {
                    echo "Situação do aluno: <span class='reprovado'>$condicao</span>";
                }

                elseif ($condicao == "Recuperação") {
                    echo "Situação do aluno: <span class='recuperacao'>$condicao</span>";
                }

                else {
                    echo "Situação do aluno: <span class='aprovado'>$condicao</span>";
                }

            ?>

            <br/><a href="03exercicio.html">Voltar</a>

        </div>

    </body>

</html>
