<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos</title>

</head>

<body>
    <!-- Faça um programa que leia os valores de COMPRIMENTO, LARGURA e ALTURA e apresente o valor do volume de uma caixa retangular. Utilize para o cálculo a fórmula VOLUME = COMPRIMENTO × LARGURA × ALTURA.
-->

    <form action="./index.php" method="POST">
        Digite o Valor do comprimento: <input type="number" name="comprimento"><br>
        Digite o Valor da largura: <input type="number" name="largura"><br>
        Digite o Valor da altura: <input type="number" name="altura"><br>
        <input type="submit" name="Enviar"><br>
    </form>

    <?php
        $comprimento = $_POST['comprimento'];
        $largura = $_POST['largura'];
        $altura = $_POST['altura'];

        function calcVolume ($comprimento, $largura, $altura){
            $volume = $comprimento * $largura * $altura;

            echo $volume;
        }

        calcVolume($comprimento, $largura, $altura);

    ?>
</body>

</html>