<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos</title>

</head>

<body>
    <!-- Faça um programa para calcular a área de uma circunferência, considerando a fórmula AREA = π × RAIO2. Utilize as variáveis AREA e RAIO, a constante π (pi = 3,14159) e os operadores aritméticos de multiplicação.-->

    <form action="/index.php" method="POST">
        <h3>Calcular área de uma circunferência</h3>
        Digite o valor do raio: <input type="number" name="raio">
        <input type="submit" name="Enviar">
    </form>
    <?php
    $raio = $_POST['raio'];

    function calcularRaio ($raio){
        $pi = 3.14;
        $area = $pi * (pow($raio, 2));

        echo $area;

    }

    calcularRaio($raio);
    ?>
</body>

</html>