<?php

$titular = "Yasmim Cosme";
$saldo = 1000;

echo "********************\n";
echo "Titular: $titular\n";
echo "Saldo atual: $saldo\n";
echo "********************\n";
echo "\n";

$numero = 0;
while($numero != 4){
    echo "1. Consultar saldo atual\n";
    echo "2. Sacar valor\n";
    echo "3. Depositar valor\n";
    echo "4. Sair\n";
    echo "\n";

    echo "Digite um número: \n";
    $numero = (float) fgets(STDIN);

    switch($numero){
        case 1: 
            echo "Seu saldo atual é: $saldo\n";
        case 2:
            echo "Quanto você quer sacar?";
            $saque = (float) fgets(STDIN);
            $saldo -= $saque;
            echo "Seu saldo atual é: $saldo\n";
        case 3:
            echo "Quanto você quer depositar?";
            $ganho = (float) fgets(STDIN);
            $saldo += $ganho;
            echo "Seu saldo atual é: $saldo\n";
        case 4:
            echo "Tchau :D\n";
            break;
            $numero = 0;
    }
}
