<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <pre>
            <?php
                require_once 'Video.php';
                require_once 'Gafanhoto.php';
                require_once 'Visualizacao.php';
                
                $video[0] = new Video("Aula1 de POO");
                $video[1] = new Video("Aula1 de PHP");
                $video[2] = new Video("Aula1 de HTML5");
                
                $g[0] = new Gafanhoto("Jubileu", 19, "M", "Juba");
                //$g[1] = new Gafanhoto("Rebeca Linhares", 29, "F", "gafa2");
                //$g[2] = new Gafanhoto("Tércio Mota", 29, "M", "gafa2");
                
                $visu[0] = new Visualizacao($g[0], $video[0]);
                $visu[1] = new Visualizacao($g[0], $video[0]);
                //$visu[2] = new Visualizacao($g[1], $video[0]);
                
                print_r($visu);
                $visu[0]->avaliar();
                $visu[1]->avaliarNota(8);
                print_r($visu);
                
            ?>
        </pre>
    </body>
</html>
