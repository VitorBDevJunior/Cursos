<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>operadores de atribuição</title>
</head>
<body>
    <?php
$preco = $_GET["p"];

echo "o preco do produto é R$ $ " . number_format($preco, 2);
$preco -= $preco * 10/100;
echo "<br/>O novo valor do produto com 10% de desconto é de R$ " . number_format($preco, 2);

    ?>
</body>
</html>