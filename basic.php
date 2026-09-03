<?php

$a = 9;
$b = 6;

echo $a + $b . "\n";

//strings
$name = "yasmim";
echo "5" + "10" . "\n";
echo "Hello, $name!\n"; 


$teste = $argv[1] ?? 2022; // pra funcionar, php basic.php 2019 
echo $teste . "\n";

if($teste > 2020) {
    echo "Novin\n";
} else {
    echo "É véi\n";
}

//match

$idade = 10;
$restricao = match ($idade) {
    10 => "Cria",
    15 => "Adolescente",
    18 => "Adulto",

};

echo $restricao . "\n";