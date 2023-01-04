<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos</title>

</head>

<body>
    <!-- Faça um programa que leia a idade de uma pessoa expressa em anos, meses e dias e escreva a idade dessa pessoa expressa apenas em dias. Considerar ano com 365 dias e mês com 30 dias. Calcular quantos dias a pessoa já viveu até hoje.
-->
    <form action="./index.php" method="POST">
        Digite a sua idade: <input type="number" name="age">
        <input type="submit" name="Enviar">
    </form>

    <?php

        $age = $_POST['age'];

        function ageToDays ($age){
            $result = $age * 365;
            
            echo "Você já viveu há"." ".$result."". " dias";
        }

        ageToDays($age);


    ?>
</body>

</html>