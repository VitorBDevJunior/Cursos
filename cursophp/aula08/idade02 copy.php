<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
    <?php
$nome = $_GET["nome"];
$ano = $_GET["ano"];
$sexo = $_GET["sexo"];
$idade = date("Y") - $ano;  

echo "$nome é $sexo e tem $idade anos.";

?>
 <a href = "ex02.html" >Voltar</a>
</div>

    
</body>
</html>
