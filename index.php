<?php

// criando variaveis

$variavel = "teste";

echo $variavel . " <br>";

// referencial

$x = 0;
$y = $x;
$x = 1;

echo $y . " <br>";

$x1 = 0;
$y2 = &$x1;
$x1 = 1;

// constantes
define('name', 'juninho');

echo name . " <br>";

// ou

const aprenderPhp = "true";
$tempo = "variavel";

echo aprenderPhp . " <br>";

// pegar o tipo da variavel
echo gettype(aprenderPhp) . " <br>";
var_dump($x);

// Arrays 

$lista = [1, 2, "3", '2,3', 3.4 , $x];
// echo
print_r($lista);
