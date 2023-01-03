<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos</title>

</head>

<body>
    <!-- Crie um algoritmo que solicite um número, e faça o cálculo fatorial do mesmo, exiba o resultado na tela. Ex: Entrada = 3 Processamento: (3 * 2) * 1 Saída: 6 -->

    <form action="/index.php" method="POST">
        Digite um Numero: <input type="number" name="number">
        <input type="Submit" name="Enviar">
    </form>

    <?php

    if (isset($_POST['number'])) {
        $number = $_POST['number'];
        $fatorial = 1;
        for ($i = $number; $i >= 1; $i--) {
            $fatorial *= $i;
        }
        echo $fatorial;
    }
    ?>
</body>

</html>