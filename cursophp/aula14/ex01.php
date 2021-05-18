<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function soma ($a, $b) {
        $s = $a+$b;
        echo "<p>a soma vale $s <p>";
    }
    soma(7, 4);
soma(8, 10);
soma(15, 55);
soma(189, 772);
$x = 150;
$y = 496;
soma($x, $y);
    ?>
</body>
</html>