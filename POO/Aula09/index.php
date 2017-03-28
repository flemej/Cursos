<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            
                include_once 'Pessoa.php';
                include_once 'Livro.php';
                
                $pessoa = array();
                $pessoa[0] = new Pessoa("André", 19, "Masculino");
                $pessoa[1] = new Pessoa("Márcia", 35, "Feminino");
                $pessoa[2] = new Pessoa("Simone", 27, "Feminino");
                $pessoa[3] = new Pessoa("Cleyton", 42, "Masculino");
                
                $livro = array();
                $livro[0] = new Livro("A volta dos que não foram","Machado de Almeida",110, $pessoa[0]);
                $livro[1] = new Livro("Poeira em alto mar","Marcolino Maresia Duster",300, $pessoa[1]);
                $livro[2] = new Livro("Trastes e tranqueiras","Querencio Dutra",107, $pessoa[1]);                

                $livro[0]->abrir();
                $livro[0]->folhear(500);
                $livro[0]->detalhes();
                $livro[0]->avancarPag();
                $livro[0]->voltarPag();
                $livro[0]->fechar();
                
            ?>
        </pre>
    </body>
</html>
