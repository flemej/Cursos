<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
            
                require_once 'Pessoa.php';
                require_once 'Aluno.php';
                require_once 'Professor.php';
                require_once 'Bolsista.php';
                require_once 'Tecnico.php';
                require_once 'Visitante.php';
                
                //$pessoa = new Pessoa();  -- dá erro pois classe abstrata não pode ser instanciada
                $visitante = new Visitante();
                $visitante->setNome("Juvenal");
                $visitante->setIdade(33);
                $visitante->setSexo("M");
                print_r($visitante);
                
                $aluno = new Aluno;
                $aluno->setNome("Pedro");
                $aluno->setMatricula(111111);
                $aluno->setIdade(16);
                $aluno->setSexo("M");                
                $aluno->setCurso("PHP");
                $aluno->fazerAniversario();
                $aluno->pagarMensalidade();
                print_r($aluno);
                
                $bolsista = new Bolsista();
                $bolsista->fazerAniversario();
                $bolsista->setBolsa(12.5);
                $bolsista->setCurso("Java");
                $bolsista->setIdade(22);
                $bolsista->setMatricula(22222);
                $bolsista->setNome("Epaminondas");
                $bolsista->setSexo("M");
                $bolsista->pagarMensalidade();
                print_r($bolsista);
                

            ?>
        </pre>
    </body>
</html>
