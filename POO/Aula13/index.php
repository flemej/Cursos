<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            
                require_once 'Animal.php';    
                require_once 'Mamifero.php';
                require_once 'Lobo.php';
                require_once 'Cachorro.php';
            
                $mamifero = new Mamifero();
                $mamifero->setPeso(10);
                $mamifero->setMembros(4);
                $mamifero->setIdade(3);
                $mamifero->setCorPelo("Preto");
                
                print_r($mamifero);
                $mamifero->emitirSom();
                
                
                
                $lobo = new Lobo();
                print_r($lobo);
                $lobo->emitirSom();
                
                $cachorro = new Cachorro();
                print_r($cachorro);
                $cachorro->emitirSom();
                $cachorro->reagirDono(false);
                $cachorro->reagirFrase("Senta");
                $cachorro->reagirHora(16);
                
                        
                
                
            ?>
        </pre>
    </body>
</html>
