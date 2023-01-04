<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos</title>

</head>

<body>
    <!-- Faça um programa que calcule a quantidade de litros de combustível gasta em uma viagem, utilizando um automóvel que faz 12Km por litro. Para obter o cálculo, o usuário deve fornecer o tempo gasto na viagem e a velocidade média durante ela. Desta forma, será possível obter a distância percorrida com a fórmula DISTANCIA = TEMPO × VELOCIDADE. Tendo o valor da distância, basta calcular a quantidade de litros de combustível utilizada na viagem com a fórmula: LITROS_USADOS = DISTANCIA ÷ 12. O programa deve apresentar os valores da velocidade média, tempo gasto na viagem, a distância percorrida e a quantidade de litros utilizada na viagem.

-->
    <form action="./index.php" method="POST">
        Digite o tempo gasto na viagem: <input type="number" name="temp">
        Digite a velocidade média durante ela: <input type="number" name="velocity">
        <input type="submit" name="Enviar">
    </form>

    <?php
        $temp = $_POST['temp'];
        $velocity = $_POST['velocity'];

        function calcularQntdLitros ($tempo, $velocidade){
            $distancia = $tempo * $velocidade;
            $litrosUsados = $distancia / 12;

            echo $litrosUsados;
        }

        calcularQntdLitros($temp, $velocity);
    ?>
</body>

</html>