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
                require_once 'Funcionario.php';

                $pessoa1 = new Pessoa();
                $aluno1 = new Aluno();
                $professor1 = new Professor();
                $funcionario = new Funcionario();

                $pessoa1->setNome("Pessoa");
                $pessoa1->setIdade(27);
                $pessoa1->setSexo("F");

                $aluno1->setNome("Aluno");
                $aluno1->setIdade(22);
                $aluno1->setSexo("F");
                
                $professor1->setNome("Professor");
                $professor1->setIdade(40);
                $professor1->setSexo("F");

                $funcionario->setNome("Funcionario");
                $funcionario->setIdade(36);
                $funcionario->setSexo("F");
                
                $aluno1->setCurso("Infromática");
                $professor1->setSalario(2500.75);
                $funcionario->setSetor("Diretoria");
                
                $aluno1->cancelarMatricula();
                $professor1->receberAumento(1000);
                $funcionario->mudarTrabalho();

                print_r($pessoa1);
                print_r($aluno1);
                print_r($professor1);
                print_r($funcionario);
            ?>
        </pre>
    </body>
</html>
