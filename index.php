<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos</title>

</head>

<body>
    <!-- Faça um programa que peça as 4 notas bimestrais e mostre a média.-->

    <form action="/index.php" method="POST">
        <h3>Calculadora de Média</h3>
        Digite a primeira nota <input type="text" name="oneNote"><br>
        Digite a segunda nota <input type="text" name="twoNote"><br>
        Digite a terceira nota <input type="text" name="threeNote"><br>
        Digite a quarta nota <input type="text" name="fourNote"><br>
        <input type="submit" name="Enviar">
    </form>
    <?php
    $oneNote = $_POST['oneNote'];
    $twoNote = $_POST['twoNote'];
    $threeNote = $_POST['threeNote'];
    $fourNote = $_POST['fourNote'];

    function noteMedia ($one, $two, $three, $four) {
        $result = ($one + $two + $three + $four) / 4;
        
        echo $result;
    }

    noteMedia($oneNote, $twoNote, $threeNote, $fourNote);
    ?>
</body>

</html>