<?php

$arrayNumeros = [
    5,
    3,
    2,
    4,
    1
];


echo "Imprimir padrao:" . PHP_EOL;
var_dump($arrayNumeros);

//Ordenando de forma padrao do menor para o maior
sort($arrayNumeros);

echo PHP_EOL . "Imprimir ordem padrao" , PHP_EOL;
var_dump($arrayNumeros);

//Ordenando de forma personalizada (reverso)
//Para isso, e necessario criar uma funcao que faca a comparacao
//Esse tipo de ordem e mais utilizada em arrays associativos
function comparaNumero(int $numero1, int $numero2): int {
    if ($numero1 > $numero2) {
        return -1;
    }
    if ($numero2 > $numero1) {
        return 1;
    }
        return 0;
    
}

usort($arrayNumeros, 'comparaNumero');
echo PHP_EOL . "Imprimir ordem personalizada" , PHP_EOL;
var_dump($arrayNumeros);

// Imprimindo na ordem reversa
rsort($arrayNumeros);
echo PHP_EOL . "Imprimir ordem reversa" , PHP_EOL;
var_dump($arrayNumeros);
?>