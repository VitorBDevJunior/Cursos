<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
    <?php

$v= array( "nome" => "Ana",
           "idade" => "25",
           "peso"  => "65,5");
           foreach ($v as $k => $c){
               echo "O campo $k possui o conteúdo $c <br>";
           }

    ?>
    
    
    </pre>
</body>
</html>