<?php

$primeiroBimestre = [
    'Vinicius' => 10,
    'Sofia' => 7,
    'Maria' => 8,
    'Nilson' => 9
];

$segundoBimestre = [
    //'Vinicius' => 10,
    'Sofia' => 7,
    'Maria' => 9,
    'Nilson' => 10
];

// Faz uma comparação entre as chaves, buscando saber se no segundo array possui as mesmas chaves do primeiro
$comparacao = array_diff_key($primeiroBimestre, $segundoBimestre);
var_dump($comparacao);

// Faz uma comparação entre os valores, buscando saber se no segundo array possui os mesmos valores do primeiro
$comparacao = array_diff($primeiroBimestre, $segundoBimestre);
var_dump($comparacao);

// Faz uma comparação entre valores e keys, buscando saber se no segunddo array possui os mesmos dados do primeiro
$comparacao = array_diff_assoc($primeiroBimestre, $segundoBimestre);
var_dump($comparacao);

// Captura e devolve somente as chaves do array. 
$capturaChave = array_keys($segundoBimestre);
var_dump($capturaChave);

// Captura e devolve somente os valores do array
$capturaValores = array_values($segundoBimestre);
var_dump($capturaValores);

?>