<?php

$notas = [
    'Vinicius' => null,
    'Joao' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9
];

$notas2 = [
    8,
    10,
    7,
    9
];

//Verificando se é um array
echo "Verifica se e um array" . PHP_EOL;
var_dump(is_array($notas));

//Verificando se é uma lista de array, isto é, se o indice está em ordem numerica crescente
//Se for true, sera possivel implementar o for com indice.
echo "Verifica se e uma lista de array com indice numerico ordenado de forma crescente" . PHP_EOL;
var_dump(array_is_list($notas));

echo "Verifica se e uma lista de array com indice numerico ordenado de forma crescente" . PHP_EOL;
var_dump(array_is_list($notas2));

//Verificando se existe uma chave no array
echo "Verifica se existe a chave Vinicius no array" . PHP_EOL;
var_dump(array_key_exists('Vinicius', $notas));

// Verificando se existe uma chave e se ela possui um valor diferente de null
echo "Verifica se existe a chave Vinicius no array e se ela possui um valor diferente de null" . PHP_EOL;
var_dump(isset($notas['Vinicius']));

// Verificando se existe um valor no array
echo "Verifica se existe o valor 10 no array" . PHP_EOL;
var_dump(in_array(10, $notas));

// Para saber quem tirou 10, usamos o array_search
echo "Verifica quem tirou o valor 10" . PHP_EOL;
echo array_search(10, $notas);

?>