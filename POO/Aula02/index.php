<!DOCTYPE html>

<html>
    
    <head>
        <meta charset="UTF-8">
        <title>Aula 02 POO</title>
    </head>
    
    <body>
        
        <?php
            
            // Disponibiliza a classe
            require_once("caneta.php");
            
            // Instancia a classe
            $c1 = new Caneta;
            $c1 -> cor="Azul";
            $c1 -> ponta= 0.5;
            $c1-> destampar();
            print_r($c1);
            
            echo "<br>";
            
            $c2 = new Caneta;
            $c2 -> cor="Verde";
            $c2 -> carga=50;
            //$c2 -> tampar();
            $c2 ->tampada=false;
            print_r($c2);
            
            
            
        ?>
        
    </body>
    
</html>
