<!DOCTYPE html>

<html>
    
    <head>
        <meta charset="UTF-8">
        <title>Aula 02 POO</title>
    </head>
    
    <body>
        
        <pre>
        
            <?php

                // Disponibiliza a classe
                require_once("caneta.php");

                // Instancia a classe
                $c1 = new Caneta;
                $c1->modelo="Bic Cristal";
                $c1->cor="Azul";
                //$c1->ponta=0.5;
                //$c1->carga=99;
                //$c1->tampada = true;
                print_r($c1);
                $c1->rabiscar();
                $c1->destampar();
                print_r($c1);
                $c1->tampada = false;
                

            ?>

        </pre>
        
    </body>
    
</html>
