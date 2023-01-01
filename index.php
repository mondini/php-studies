<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos</title>

</head>

<body>
    <!-- Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é positivo, 
    negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero" -->

    <h3>Esse Sistema irá te mostrar se o valor digitado é positivo ou negativo</h3>
    <form action="" method="POST">
        Digite um número: <input type="number" name="number">
        <input type="submit" name="enviar"><br>
    </form>
    <?php
        $number = $_POST['number'];

        function numberIsPositive($number){
            if($number >= 0){
                echo "O número ",$number, " é positivo!";
            } else {
                echo "O número ",$number, " é negativo!";
            };
        }
        
        numberIsPositive($number);
        
    ?>

</body>

<script></script>

</html>