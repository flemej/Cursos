<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <pre>

            <?php

                require_once("caneta.php");

                $c1 = new Caneta("BIC","Azul",.5);
                $c2 = new Caneta("BIC","Preta",.5);
                $c3 = new Caneta("BIC","Verde",.5);
                $c4 = new Caneta("BIC","Vermelha",.5);
                print_r($c1);
                print_r($c2);
                print_r($c3);
                print_r($c4);
                
                
            ?>

        </pre>
        
    </body>
    
</html>
