<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos</title>

</head>

<body>
    <!-- Faça um programa para determinar o consumo médio de um automóvel sendo fornecida a distância total percorrida pelo automóvel e o total de combustível gasto.

-->
    <form action="./index.php" method="POST">
        Digite a distancia total percorrida: <input type="number" name="distancia"><br>
        Digite o total de combustível gasto: <input type="number" name="combustivel">
        <input type="submit" name="Enviar">
    </form>

    <?php
        $distancia = $_POST['distancia'];
        $combustivel = $_POST['combustivel'];

        function calcularQntdLitros ($distancia, $combustivel){
            $consumoMédio = $distancia / $combustivel;

            echo $consumoMédio."km";
        }

        calcularQntdLitros($distancia, $combustivel);
    ?>
</body>

</html>