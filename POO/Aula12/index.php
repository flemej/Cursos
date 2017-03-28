<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            
            require_once 'Mamifero.php';
            require_once 'Reptil.php';
            require_once 'Peixe.php';
            require_once 'Ave.php';
            require_once 'Canguru.php';
            require_once 'Cachorro.php';
            require_once 'Cobra.php';
            require_once 'Tartaruga.php';
            require_once 'Goldfish.php';
            require_once 'Arara.php';
            echo "<hr></hr>";
                        
            $mamifero = new Mamifero();
            $mamifero->setIdade(1);
            $mamifero->setMembros(4);
            $mamifero->setPeso(1);
            $mamifero->setCorPelo("Preto");
            $mamifero->alimentar();
            $mamifero->emitirSom();
            $mamifero->locomover();
            print_r($mamifero);
            echo "<hr></hr>";
            
            $reptil = new Reptil();
            $reptil->setIdade(1);
            $reptil->setMembros(4);
            $reptil->setPeso(1);
            $reptil->setCorEscama("Verde");
            $reptil->alimentar();
            $reptil->emitirSom();
            $reptil->locomover();
            print_r($reptil);
            echo "<hr></hr>";
            
            $peixe = new Peixe();
            $peixe->setIdade(1);
            $peixe->setMembros(0);
            $peixe->setPeso(0.100);
            $peixe->setCorEscama("Douradas");
            $peixe->alimentar();
            $peixe->emitirSom();
            $peixe->locomover();
            $peixe->soltarBolhas();
            print_r($peixe);
            echo "<hr></hr>";
            
            $ave = new Ave();
            $ave->setIdade(1);
            $ave->setMembros(2);
            $ave->setPeso(1);
            $ave->setCorPena("Azul");
            $ave->alimentar();
            $ave->emitirSom();
            $ave->locomover();
            $ave->fazerNinho();
            print_r($ave);
            echo "<hr></hr>";
            
            $canguru = new Canguru();
            $canguru->setIdade(1);
            $canguru->setMembros(4);
            $canguru->setPeso(60);
            $canguru->setCorPelo("Marron");
            $canguru->usarBolsa();
            $canguru->alimentar();
            $canguru->emitirSom();
            $canguru->locomover();
            print_r($canguru);
            echo "<hr></hr>";
            
            $cachorro = new Cachorro();
            $cachorro->setIdade(1);
            $cachorro->setMembros(4);
            $cachorro->setPeso(60);
            $cachorro->setCorPelo("Marron");
            $cachorro->alimentar();
            $cachorro->emitirSom();
            $cachorro->locomover();
            $cachorro->abanarRabo();
            $cachorro->enterrarOsso();
            print_r($cachorro);
            echo "<hr></hr>";
            
                    
            ?>
        </pre>
    </body>
</html>
