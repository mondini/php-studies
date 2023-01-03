<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudos</title>

</head>

<body>
    <!-- Faça um programa que:

Leia o nome;
Leia o sobrenome;
Concatene o nome com o sobrenome;
Apresente o nome completo.-->
    <form action="./index.php" method="POST">
        Digite seu nome: <input type="text" name="nome">
        Digite seu sobrenome: <input type="text" name="sobre">
        <input type="submit" name="Enviar">
    </form>

    <?php
        $nome = $_POST['nome'];
        $sobre = $_POST['sobre'];

        function concatenar ($nome, $sobre){
            $result = $nome. " " . $sobre;

            echo $result;
        }

        concatenar($nome, $sobre);
    ?>
</body>

</html>