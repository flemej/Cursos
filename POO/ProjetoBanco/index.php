<!DOCTYPE html>

<html>
    
    <head>
        
        <meta charset="UTF-8">
        <title></title>
        
    </head>
    
    <body>
        <pre>
        
            <?php

                require_once("ContaBanco.php");

                $p1 = new ContaBanco(); // Cliente
                $p1->setDono("Jubileu");
                $p1->setNumConta(1111);
                $p1->abrirConta("CC");
                $p1->fecharConta();
                $p1->pagarMensalidade();
                $p1->fecharConta();
                $p1->sacar(38);
                $p1->fecharConta();
                $p1->depositar(10);
                
            ?>

        </pre>
        
    </body>
    
</html>
