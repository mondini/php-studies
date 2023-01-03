<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos</title>

</head>

<body>
    <!-- Faça um programa que leia uma temperatura em graus Celsius e apresente-a convertida em graus Fahrenheit. A fórmula de conversão é: ℉ = (9 × ℃ + 160) ÷ 5, na qual ℉ é a temperatura em Fahrenheit e ℃ é a temperatura em Celsius.-->
    <form action="./index.php" method="POST">
        <h3>Conversão de Celsius para Fahrenheit</h3>
        Digite uma temperatura: <input type="number" name="temp">
        <input type="submit" name="Enviar">
    </form>
    
    <?php
        $temp = $_POST['temp'];

        function celsiusToFahrenheit ($temp) {
            $result = (1.8 * $temp) + 32;
            echo $result;
        }

        celsiusToFahrenheit($temp);
    ?>
</body>

</html>