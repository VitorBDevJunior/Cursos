<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProjetoYoutube</title>
</head>
<body>
    <pre>
    <?php
    require_once 'Video.php';
    require_once 'Pessoa.php';
    require_once 'Gafanhoto.php';
    require_once 'Visualizacao.php';
   $v[0] = new Video("Aula 1 de POO");
   $v[1] = New Video("Aula 12 de PHP");
   $v[2] = New Video("Aula 15 de HTML5");
    
   $g[1] = new Gafanhoto("Creuza", 33, "F", "CREUziTA");
   $g[0] = new Gafanhoto("Jubileu", 22, "M", "jubs");

$vis[0] = new Visualizacao($g[0], $v[2]);
$vis[1] = new Visualizacao($g[0], $v[0]);

$vis[0]->avaliar();
$vis[1]->avaliarPorc(85);




   print_r($vis);
   //print_r($v);
    ?>
    <pre>
</body>
</html>