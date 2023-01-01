<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos</title>

</head>

<body>
<!-- Crie um algoritmo que solicite a entrada de um número, e exiba a tabuada de 0 a 10 de acordo com o número solicitado, ex: 
Entrada = 4
Saída = 4 X 0 = 0...4 X 10 = 40. -->

<form action="" method="POST">
    Digite um Numero: <input type="number" name="number">
    <input type="Submit" name="Enviar">
</form>

<?php
    $number = $_POST['number'];

    function multiplicationTable($number){
        for ($i=0; $i < 11; $i++) { 
            echo $number, "x", $i, "=", $number * $i, "<br>"; 
        }
    }

    multiplicationTable($number);
?>
</body>

</html>