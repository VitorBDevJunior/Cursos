<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> <pre>
<?php
require_once "Garrafacoffe.php";
$g1 = new Garrafacoffe("Termolar", "Preta", "Tampa de pressão", 75); 
$g1->temperatura = "Quente";
print_r($g1);

?>
<pre>
</body>
</html>